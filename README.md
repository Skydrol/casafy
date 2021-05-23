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

Users:
```
[GET]     http://localhost:8000/api/users -> get all users
[GET]     http://localhost:8000/api/users/{id} -> get user with id
[POST]    http://localhost:8000/api/users -> save a new user
[PUT]     http://localhost:8000/api/users/{id} -> update an user with id
[DELETE]  http://localhost:8000/api/users/id -> delete an user with id
[GET]     http://localhost:8000/api/{id}/properties -> get all properties from a user with id
```
Properties:
```
[GET]     http://localhost:8000/api/properties -> get all properties
[GET]     http://localhost:8000/api/properties/{id} -> get property with id
[POST]    http://localhost:8000/api/properties -> save a new property
[PUT]     http://localhost:8000/api/properties/{id} -> update a property with id
[DELETE]  http://localhost:8000/api/properties/id -> delete a property with id
[GET]     http://localhost:8000/api/properties/{id}/purchased-toggle -> toggle purchased boolean value for the oposite 

```

