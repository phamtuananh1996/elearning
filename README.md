Installation package elearning

step 1: 
- run migrate: php artisan migrate --path=vendor/gfl/elearning/src/migrations
- rollback migrate : php artisan migrate:rollback --path=vendor/gfl/elearning/src/migrations

step2 : public view 
- php artisan vendor:publish --tag=public

step3 : run localhost:8000/elearning


//for dev 

- create controller : php artisan gfl:make-controller {nameController}
- create migration : php artisan gfl:make-migration {nameMigration}
- create model : php artisan gfl:make-model {nameModel}
