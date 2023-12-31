# API PLATFORM WITH SYMFONY

This repository provides a step-by-step guide to set up an API platform using Symfony. It includes the installation of required packages, creation of entities, and execution of migrations.

## Installation

1. Install a new Symfony project:

    ```bash
    symfony new ApiPlateform
    ```

2. Navigate to the project directory:

    ```bash
    cd ApiPlateform
    ```

3. Install the API platform:

    ```bash
    symfony composer req api
    ```

4. Install ORM, Migration, Maker, Fixtures, and Testing:

    ```bash
    symfony composer req orm
    symfony composer req migrations
    symfony composer req --dev make
    symfony composer req --dev orm-fixtures
    symfony composer req --dev test
    ```

5. Install JWT (Json Web Token) authentication:

    ```bash
    symfony composer req lexik/jwt-authentication-bundle
    ```

6. Install Faker (generates fake data for testing):

    - Please follow the installation instructions provided by [Faker](https://github.com/fzaninotto/Faker) to install the package.

    - Run the following command to install the package:

    ```bash
    composer require --dev fzaninotto/faker
    ```

## Entities

1. Create the User entity:

    ```bash
    bin/console make:user
    ```

2. Create the Article entity:

    ```bash
    bin/console make:entity Article
    ```

## Migrations

1. Generate a migration:

    ```bash
    symfony console make:migration
    ```

2. Execute the migration to update the database schema:

    ```bash
    bin/console doctrine:migrations:migrate
    ```

## Run Fake data
   ```bash 
   php bin/console  doctrine:fixtures:load
   ```

## Run App
 ```bash
    symfony server:start

go to =>http://127.0.0.1:8000/api
 ```
## Run testUnit
 ```bash
 bin/phpunit
 ```
## Error in Groups of serialization :
 ```bash
 bin/console cache:clear
 ```
## normalizationContext vs denormalizationContext:


-------------------------------------
normalizationContext:['groups'=>['user:read']]=> indicating that only properties annotated with this group should be included in the normalized output(get/getcollection)
ex:
#[Groups(['user:write'])]
{"email": "ypouros@hotmail.com", }
-------------------------------------
denormalizationContext:['groups'=>['user:write']]=>when deserializing input data. (post/put/patch)
#[Groups(['user:write'])]
{
"email": "string"
}