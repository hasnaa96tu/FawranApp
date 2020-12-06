<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        // Ask for db migration refresh, default is no
        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {

            // Call the php artisan migrate:fresh using Artisan
            $this->command->call('migrate:fresh');

            $this->command->line("Database cleared.");
        }

        //make 5  user_types
        $user_types = factory(App\User_type::class,5)->create();

        //make 10 new users from  user_types
        $users=$user_types->each(function($user_type) {
           factory(App\User::class, 2)
                   ->create(['user_type_id' => $user_type->id]);
       });

       //make 10 types
       $types = factory(App\Type::class,10)->create();

       //make 20 new categories from types
      $categories= $types->each(function($type) {
          factory(App\Category::class,4)
                  ->create(['type_id' => $type->id]);
      });
      //make 2 supermarkets
      for($i=1 ; $i<3 ;$i++){
        factory(App\Supermarket::class)
                ->create(['user_id' => $i,'category_id'=>2]);
      }
      //make 2 products
      for($i=1 ; $i<3 ;$i++){
        factory(App\Product::class)
                ->create(['supermarket_id' => $i ,'category_id'=>4]);
      }
      //make 2 pharmacies
      for($i=3 ; $i<5 ;$i++){
        factory(App\Pharmacy::class)
                ->create(['user_id' => $i,'category_id'=>3]);
      }
      //make 1 med company
      $types = factory(App\Medical_company::class)->create();



      //make 2 drugs
      for($i=1 ; $i<3 ;$i++){
        factory(App\Drug::class)
                ->create(['pharmacy_id' => $i,'category_id'=>5,'medical_company_id'=>1]);
      }
      //make 4 Available_times
      for($i=1 ; $i<3 ;$i++){

        factory(App\Available_time::class)
                ->create(['ph_sm_id' => $i,'type_id'=>2]);
                factory(App\Available_time::class)
                        ->create(['ph_sm_id' => $i,'type_id'=>3]);
      }

      //make 4 orders
      for($i=1 ; $i<3 ;$i++){

        factory(App\Order::class)
                ->create(['user_id' => 5,'type_id'=>2]);
                factory(App\Order::class)
                        ->create(['user_id' => 5,'type_id'=>3]);
      }
      //make 2 supermarket_order_details
      $k=1;
      for($i=1 ; $i<3 ;$i++){

        factory(App\Supermarket_order_detail::class)
                ->create(['supermarket_id' => $i,'order_id'=>$k,'product_id'=>$k]);
                $k++;
      }
      //make 2 pharmacy_order_details
      $k=3;
      for($i=1 ; $i<3 ;$i++){

        factory(App\Pharmacy_order_detail::class)
                ->create(['pharmacy_id' => $i,'order_id'=>$k,'drug_id'=>$i]);
                $k++;
      }

      //make 1  customer
      $cus= factory(App\Customer::class)->create(['user_id'=>5]);
      //make 1 feed_back
      $fb = factory(App\FeedBack::class)->create(['customer_id'=>$cus->id]);
      //make 1 app rate
      $ar = factory(App\App_rate::class)->create(['customer_id'=>$cus->id]);

      //make 2 offers
      $offers = factory(App\Offer::class)->create();

      //make 2 offer_details from  offers

      $ods=$offers->each(function($offer) {
         factory(App\Offer_detail::class)
                 ->create(['offer_id' => $offer->id,'product_id'=>1]);
              
      });

      $this->command->info("Database seeded.");

       // Re Guard model


    }
}
