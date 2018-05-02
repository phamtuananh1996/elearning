Installation package elearning

step 1: 
- run migrate: php artisan migrate --path=vendor/gfl/elearning/src/migrations
- rollback migrate : php artisan migrate:rollback --path=vendor/package/gfl/elearning/src/migrations

step2 : public view 
- php artisan vendor:publish --tag=config

step3 : run localhost:8000/elearning