# MVC Sample App

A Sample MVC Application built on top of Lumen PHP Framework

## System Requirements

* Web Server (APACHE, NGINX)
* PHP >= 5.5.9
* Relational Database (MySQL, Postgres, SQLite, SQL Server)
* GIT
* Composer

## Instalattion

Clone the remote repository:  
```
    git clone https://github.com/GilTSN/mvc-sample-app.git
```
    
Install the dependencies running:  
```
    composer install  
```
inside the project root folder

## Configuration

To configure the application is necessary to create a file named *.env* in the root directory with the following params:  
APP_ENV=local  
APP_DEBUG=true  
APP_KEY={some 32 random string}  
APP_LOCALE=en  
APP_FALLBACK_LOCALE=en  
DB_CONNECTION={your db driver, ex: mysql}  
DB_HOST={your db host, ex: localhost}  
DB_PORT={the db port, ex: 3306}  
DB_DATABASE={the name of the database, ex: mvc}  
DB_USERNAME={db username, ex: root}  
DB_PASSWORD={db password}  
CACHE_DRIVER=cookie  
SESSION_DRIVER=cookie  
QUEUE_DRIVER=database

### Creating the tables

Create the application db tables running:  
```
    php artisan migrate  
```
from the command line inside the project root folder

### Giving the necessary folders permissions

Is necessary to give *write* and *read* permissions to the */storage* folder.

## Application Structure

### Routes

The routes of the application are defined in the *app/Http/routes.php* file.

#### Available routes and features

The following routes and features are available in the application:  

##### Lists the registered articles
*Pattern:* '/'  
*Method:* 'GET'

##### Creates a new article
*Pattern:* 'articles/create'  
*Method:* 'GET'

##### Stores an article in the database
*Pattern:* 'articles'  
*Method:* 'POST'

##### Shows an article
*Pattern:* 'articles/{id}'  
*Method:* 'GET'

##### Edits an article
*Pattern:* 'articles/{id}/edit'  
*Method:* 'GET'

##### Updates an article in the database
*Pattern:* 'articles/{id}'  
*Method:* 'PUT'

##### Deletes an article from the database
*Pattern:* 'articles/{id}'  
*Method:* 'DELETE'

### Models

The *models* of the application lives in the *app/Models* folder.

### Views

The *views* of the application lives in the *resources/views* folder.

### Controllers

The *controllers* of the application lives in the *app/Http/Controllers* folder.

### Services

There are only one service created for this sample app. The *Articles Validation Service* is responsible for validate the 
*Articles* persistence operations and are located in the *app/Services/Validation/* directory.
