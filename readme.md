--------------------------------API PLATEFORM WITH SYMFONY ---------------------

1-install new project :
symfony new ApiPlateform 
2-go to ApiPlateform
cd ApiPlateform
3-install api
symfony composer req api 
4-install orm+migration+maker+fixtures+test..
symfony composer req orm  
symfony composer req migrations
symfony composer req --dev make
symfony composer req --dev orm-fixtures
symfony composer req --dev test
5-install jwt(Json Web Token )
symfony composer req lexik/jwt-authentication-bundle
6-install faker(generates fake data for you)
https://github.com/fzaninotto/Faker
composer require --dev  fzaninotto/faker
7-create user entity
bin/console make:user 
8-create article entity
bin/console make:entity Article 
9-make migration
symfony console make:migration 
10-execute mig into db with doctrine
bin/console doctrine:migrations:migrate   

