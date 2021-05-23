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

[GET] - get all properties
```
http://localhost:8000/api/properties 
```

[GET] - get property with id
```
http://localhost:8000/api/properties/{id} 
```

[POST] - save a new property
```
http://localhost:8000/api/properties 
```

[PUT] - update a property with id
```
http://localhost:8000/api/properties/{id} 
```

[DELETE] - delete a property with id
```
http://localhost:8000/api/properties/id 
```

[GET] - toggle purchased boolean value for the oposite 
```
http://localhost:8000/api/properties/{id}/purchased-toggle  

```

