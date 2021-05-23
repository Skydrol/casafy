<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Property;

use Carbon\Carbon;

class PropertyController extends Controller
{
    public function index()
    {
        return Property::all();
    }

    public function show(Property $property)
    {
        $createdAt = Carbon::createFromFormat('Y-m-d H:s:i', $property->created_at);
        $today = Carbon::now();
        $months = $today->diffInMonths($createdAt);

        if($months > 3 && $property->expired == false ){
            $property->expired = true;
            $property->save();
        }

        return $property;
    }

    public function store(Request $request)
    {
        $notPurchasedProperties = Property::where(
            [
                'purchased' => false,
                'owner_id' => $request->owner_id
            ]
        )->count();

        if($notPurchasedProperties < 3){
            $property = Property::create($request->all());
            return response()->json($property, 201);
        }

        return response()->json('An user cannot have more than 3 properties with purchased = false', 200);

    }

    public function update(Request $request, Property $property)
    {
        $property->update($request->all());

        return response()->json($property, 200);
    }

    public function delete(Property $property)
    {
        $property->delete();

        return response()->json(null, 204);
    }
}
