git clone https://github.com/Laravel-Backpack/demo.git backpack-demo 

composer install
php artisan key:generate
php artisan migrate
php artisan migrate:fresh if isset
php artisan db:seed



php artisan migrate:fresh if you want remake db form migrations


login :

admin@example.com 
admin
php artisan backpack:crud zones
   2 php artisan migrate
   3 php artisan migrate
   4 php artisan migrate zones
   5 php artisan migrate:fresh zones
   6 php artisan migrate zones
   7 php artisan migrate
   8 php artisan migrate --force
   9 php artisan migrate:refresh
  10 php artisan migrate
  11 php artisan migrate:refresh
  12 php artisan migrate
  13 php artisan migrate:refresh
  14 php artisan migrate
  15 composer install
  16 composer update
  17 php artisan db:seed
  18 php artisan migrate:refresh
  19 php artisan db:seed
  20 php artisan db:seed
  21 php artisan migrate:refresh
  22 php artisan db:seed
  23 php artisan db:seed
  24 php artisan migrate:refresh
  25 php artisan db:seed
  26 php artisan migrate:refresh
  27 php artisan db:seed
  28 php artisan make:seeder FarmsTableSeeder
  29 php artisan make:seeder FarmsTableSeeder
  30 php artisan migrate:refresh
  31 php artisan db:seed
  32 php artisan migrate:refresh
  33 php artisan db:seed
  34 n Container.php line 835:
  35 composer dump-autoload
  36 php artisan db:seed
  37 php artisan make:seeder zonesTableSeeder
  38 php artisan db:seed
  39 composer dump-autoload
  40 php artisan migrate:refresh
  41 php artisan db:seed
  42 php artisan migrate:refresh
  43 php artisan db:seed
  44 git add .
  45 git commit -m" tungnt"
  46 git push


# STEP 0. create migration (in case you're starting from scratch)
php artisan make:migration:schema create_tags_table --model=0 --schema="name:string:unique"
php artisan migrate
php artisan db:seed

# STEP 1. create a Model, Request, Controller, Route and sidebar item for the admin panel
php artisan backpack:crud tag #use singular, not plural

# STEP 2. go through the generated files, customize according to your needs