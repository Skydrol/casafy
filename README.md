# Casafy - Backend Test

This is the test from Casafy based on Laravel.

## Installation

Use the package manager [composer](https://getcomposer.org/) in the root folder to install.

```bash
 composer install
```
After that you need to configure the MySQL database on the .env file and create the respective database, and then execute:

```bash
 php artisan migrate
```

## Usage

You will need to start the server, using this command:

```bash
 php artisan serve
```
The routes are:

### Users:

[GET] - get all user 
```
http://localhost:8000/api/users 
```

[GET] -> get user with id
```
http://localhost:8000/api/users/{id}
```

[POST] - save a new user
```
http://localhost:8000/api/users 
```

[PUT] - update an user with id
```
http://localhost:8000/api/users/{id} 
```

[DELETE] -  delete an user with id
```
http://localhost:8000/api/users/id 
```

[GET] - get all properties from a user with id
```
http://localhost:8000/api/{id}/properties 
```

### Properties:
```
[GET]     http://localhost:8000/api/properties -> get all properties
```
```
[GET]     http://localhost:8000/api/properties/{id} -> get property with id
```
```
[POST]    http://localhost:8000/api/properties -> save a new property
```
```
[PUT]     http://localhost:8000/api/properties/{id} -> update a property with id
```
```
[DELETE]  http://localhost:8000/api/properties/id -> delete a property with id
```
```
[GET]     http://localhost:8000/api/properties/{id}/purchased-toggle -> toggle purchased boolean value for the oposite 

```

