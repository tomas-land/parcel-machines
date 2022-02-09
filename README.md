
# Parcel Machines App

Basic web app created with laravel framework for listing omniva parcel machines daily from omniva.lt api with search by zip code , name or address


## Demo

http://parcelmachines.xyz/parcelmachines

![Capturedddd](https://user-images.githubusercontent.com/72792707/153203992-2a07b31d-4274-458a-a990-6cb22f2fc131.JPG)




## Installation

Alternative installation is possible without local dependencies relying on [Docker](#docker). 


Clone the repository

    git clone https://github.com/tomas-land/parcel-machines.git

Switch to the repo folder

    cd parcel-machines

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Docker

To install with [Docker](https://www.docker.com), run following commands:

```
git clone https://github.com/tomas-land/parcel-machines.git
cd parcel-machines
cp .env.example.docker .env
docker run -v $(pwd):/app composer install
cd ./docker
docker-compose up -d
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate
docker-compose exec php php artisan db:seed
docker-compose exec php php artisan serve --host=0.0.0.0
```

## Technologies used

Project is created with :

* PHP 7.3.11 
* Tailwind 3.0.18
* Laravel 8.82.0
* jQuery 3.6.0
* MySql 8.0.18



## Usage

To run scheduled task on local server : 
```
php artisan schedule:work
```


## Workflow

* First day: created main layout, migration, model, controller 
* Second day: created scheduled task , implemented ajax search
* Third day: created logic for filtered data export into excel
* Fourth day: tried to handle errors  
* Fifth day: created readme, hosted app on remote server   
* Sixth day: debugged   
## Dependencies

* maatwebsite/excel v3.1 - for exporting search results into excel 
* tightenco/ziggy v1.4 - for using laravel named routes in javascript
