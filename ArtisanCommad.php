



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
