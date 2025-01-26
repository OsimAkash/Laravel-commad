



Database Migrations:
Create Table:
php artisan make:migration create_table_name
Fake Data create command:
php artisan db:seed
Ex: 100 fake data store database products table
        for ($i = 0; $i < 100; $i++) {
            # code...


            DB::table('products')->insert([
                'name'           =>  Str::random(30),
                'seler_name'     =>  Str::random(30),
                'description'    =>  Str::random(300),
                'price'          =>  (float) random_int(10, 1000),
                'created_at'      =>  now(),
                'updated_at'      =>  now(),
            ]);
        }


        Php Faker-Data Used Ex: 
         $fake = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            # code...
                DB::table('products')->insert([
                'name'           =>  $fake->realText(60),
                'seler_name'     =>  $fake->name,
                'description'    =>  $fake->realText(),
                'price'          =>  (float) random_int(10, 1000),
                'created_at'      =>  now(),
                'updated_at'      =>  now(),
            ]);
        }
php artisan migrate:fresh --seed
           for ($i = 0; $i < 100; $i++) {
            # code...
                DB::table('products')->insert([
                'name'           =>  $fake->realText(60),
                'seler_name'     =>  $fake->name,
                'description'    =>  $fake->realText(),
                'price'          =>  (float) random_int(10, 1000),
                'created_at'      =>  now(),
                'updated_at'      =>  now(),
            ]);
        }
                php artisan make:seed

            $this->call([
            Product::class
        ]);
                
