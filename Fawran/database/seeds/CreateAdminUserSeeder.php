<?php

use Illuminate\Database\Seeder;
use App\User;
use App\User_type;
use App\Type;
use App\Category;
use App\Customer;
use App\Pharmacy;
use App\Supermarket;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $user_type= User_type::create([
           'name'=>'admin',
           'name_ar'=>'ادمن'

      ]);
      $user_type2= User_type::create([
           'name'=>'editor',
           'name_ar'=>'محرر'

      ]);
      $user_type3= User_type::create([
           'name'=>'driver',
           'name_ar'=>'سائق'

      ]);
      $user_type4= User_type::create([
           'name'=>'customer',
           'name_ar'=>'زبون'

      ]);

      $user_type5= User_type::create([
           'name'=>'supermarket',
           'name_ar'=>'بقالية'

      ]);
      $user_type6= User_type::create([
           'name'=>'pharmacy',
           'name_ar'=>'صيدلية'

      ]);

        $user = User::create([
        	'name' => 'admin',
          'name_ar' => 'admin',
          'user_type_id'=>'1',
          'status'=>'2',
          'user_code'=>'000000',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456')
        ]);
        $user2 = User::create([
        	'name' => 'editor',
          'name_ar' => 'editor',
          'user_type_id'=>'2',
          'status'=>'2',
          'user_code'=>'000000',
        	'email' => 'edit@gmail.com',
        	'password' => bcrypt('123456')
        ]);
        $user3 = User::create([
        	'name' => 'driver',
          'name_ar' => 'driver',
          'user_type_id'=>'3',
          'status'=>'2',
          'user_code'=>'000000',
        	'email' => 'drive@gmail.com',
        	'password' => bcrypt('123456')
        ]);
        $user4 = User::create([
          'name' => 'customer',
          'name_ar' => 'customer',
          'user_type_id'=>'4',
          'status'=>'2',
          'user_code'=>'000000',
          'email' => 'customer@gmail.com',
          'password' => bcrypt('123456')
        ]);
        $customer=Customer::create([
          'fullname' => 'customer',
          'fullname_ar' => 'customer',
          'user_id'=>$user4->id,
          'location'=>'rr',
          'location_ar'=>'rr',
          'phone_number'=>'0987654433',
            'image'=>'card-m1.jpg',

        ]);

        $type1=Type::create([
          'name' => 'supermarket',
          'name_ar' => 'supermarket',
        ]);
        $cat1=Category::create([
          'type_id'=>$type1->id,
          'name' => 'supermarket',
          'name_ar' => 'supermarket',
        ]);
        $type2=Type::create([
          'name' => 'pharmacy',
          'name_ar' => 'pharmacy',
        ]);
        $cat2=Category::create([
          'type_id'=>$type2->id,
          'name' => 'pharmacy',
          'name_ar' => 'pharmacy',
        ]);

        $user5 = User::create([
          'name' => 'supermarket',
          'name_ar' => 'supermarket',
          'user_type_id'=>'5',
          'status'=>'2',
          'user_code'=>'000000',
          'email' => 'supermarket@gmail.com',
          'password' => bcrypt('123456')
        ]);
        $super=Supermarket::create([
          'name' => 'supermarket',
          'name_ar' => 'supermarket',
          'user_id'=>$user5->id,
          'category_id'=>$cat1->id,
          'location'=>'rr',
          'location_ar'=>'rr',
          'phone_number'=>'0987654433',
            'image'=>'card-m1.jpg',

        ]);
        $user6 = User::create([
          'name' => 'pharmacy',
          'name_ar' => 'pharmacy',
          'user_type_id'=>'6',
          'status'=>'2',
          'user_code'=>'000000',
          'email' => 'pharmacy@gmail.com',
          'password' => bcrypt('123456')
        ]);
        $phar=Pharmacy::create([
          'name' => 'pharmacy',
          'name_ar' => 'pharmacy',
          'user_id'=>$user6->id,
          'category_id'=>$cat2->id,
          'location'=>'rr',
          'location_ar'=>'rr',
          'phone_number'=>'0987654433',
            'image'=>'card-p2.jpg',

        ]);


        $role = Role::create(['name' => 'Admin']);


        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);


        $role2 = Role::create(['name' => 'editor']);

        $role2->givePermissionTo('customer-list');
        $role2->givePermissionTo('customer-create');
        $role2->givePermissionTo('customer-edit');
        $role2->givePermissionTo('customer-delete');

        $role2->givePermissionTo('order-list');
        $role2->givePermissionTo('order-create');
        $role2->givePermissionTo('order-edit');
        $role2->givePermissionTo('order-delete');
        $role2->givePermissionTo('order-accept');
        $role2->givePermissionTo('order-reject');

        $role2->givePermissionTo('type-list');
        $role2->givePermissionTo('type-create');
        $role2->givePermissionTo('type-edit');
        $role2->givePermissionTo('type-delete');

        $role2->givePermissionTo('category-list');
        $role2->givePermissionTo('category-create');
        $role2->givePermissionTo('category-edit');
        $role2->givePermissionTo('category-delete');

        $role2->givePermissionTo('pharmacy-list');
        $role2->givePermissionTo('pharmacy-create');
        $role2->givePermissionTo('pharmacy-edit');
        $role2->givePermissionTo('pharmacy-delete');

        $role2->givePermissionTo('supermarket-list');
        $role2->givePermissionTo('supermarket-create');
        $role2->givePermissionTo('supermarket-edit');
        $role2->givePermissionTo('supermarket-delete');

        $role2->givePermissionTo('company-list');
        $role2->givePermissionTo('company-create');
        $role2->givePermissionTo('company-edit');
        $role2->givePermissionTo('company-delete');

        $role2->givePermissionTo('drug-list');
        $role2->givePermissionTo('drug-create');
        $role2->givePermissionTo('drug-edit');
        $role2->givePermissionTo('drug-delete');

        $role2->givePermissionTo('product-list');
        $role2->givePermissionTo('product-create');
        $role2->givePermissionTo('product-edit');
        $role2->givePermissionTo('product-delete');

        $role2->givePermissionTo('offer-list');
        $role2->givePermissionTo('offer-create');
        $role2->givePermissionTo('offer-edit');
        $role2->givePermissionTo('offer-delete');

        $role2->givePermissionTo('feedback-list');
        $role2->givePermissionTo('feedback-create');
        $role2->givePermissionTo('feedback-edit');
        $role2->givePermissionTo('feedback-delete');

        $role2->givePermissionTo('apprate-list');
        $role2->givePermissionTo('apprate-create');
        $role2->givePermissionTo('apprate-edit');
        $role2->givePermissionTo('apprate-delete');

        $user2->assignRole([$role2->id]);

        $role3 = Role::create(['name' => 'driver']);

        $role3->givePermissionTo('order-list');



        $user3->assignRole([$role3->id]);

        $role4 = Role::create(['name' => 'customer']);

        $role4->givePermissionTo('order-list');
        $role4->givePermissionTo('order-create');
        $role4->givePermissionTo('order-edit');
        $role4->givePermissionTo('order-cancel');




        $role5 = Role::create(['name' => 'supermarket']);
        $role5->givePermissionTo('supermarket-edit');


        $role5->givePermissionTo('order-list');
        $role5->givePermissionTo('order-create');
        $role5->givePermissionTo('order-edit');
        $role5->givePermissionTo('order-delete');
        $role5->givePermissionTo('order-accept');
        $role5->givePermissionTo('order-reject');

        $role5->givePermissionTo('type-list');
        $role5->givePermissionTo('type-create');
        $role5->givePermissionTo('type-edit');
        $role5->givePermissionTo('type-delete');

        $role5->givePermissionTo('category-list');
        $role5->givePermissionTo('category-create');
        $role5->givePermissionTo('category-edit');
        $role5->givePermissionTo('category-delete');

        $role5->givePermissionTo('product-list');
        $role5->givePermissionTo('product-create');
        $role5->givePermissionTo('product-edit');
        $role5->givePermissionTo('product-delete');

        $role5->givePermissionTo('offer-list');
        $role5->givePermissionTo('offer-create');
        $role5->givePermissionTo('offer-edit');
        $role5->givePermissionTo('offer-delete');

        $role5->givePermissionTo('feedback-list');
        $role5->givePermissionTo('feedback-create');
        $role5->givePermissionTo('feedback-edit');
        $role5->givePermissionTo('feedback-delete');

        $user5->assignRole([$role5->id]);



        $role6 = Role::create(['name' => 'pharmacy']);



        $role6->givePermissionTo('pharmacy-edit');



        $role6->givePermissionTo('order-list');
        $role6->givePermissionTo('order-create');
        $role6->givePermissionTo('order-edit');
        $role6->givePermissionTo('order-delete');
        $role6->givePermissionTo('order-accept');
        $role6->givePermissionTo('order-reject');

        $role6->givePermissionTo('type-list');
        $role6->givePermissionTo('type-create');
        $role6->givePermissionTo('type-edit');
        $role6->givePermissionTo('type-delete');

        $role6->givePermissionTo('category-list');
        $role6->givePermissionTo('category-create');
        $role6->givePermissionTo('category-edit');
        $role6->givePermissionTo('category-delete');

        $role6->givePermissionTo('company-list');
        $role6->givePermissionTo('company-create');
        $role6->givePermissionTo('company-edit');
        $role6->givePermissionTo('company-delete');

        $role6->givePermissionTo('drug-list');
        $role6->givePermissionTo('drug-create');
        $role6->givePermissionTo('drug-edit');
        $role6->givePermissionTo('drug-delete');



        $role6->givePermissionTo('offer-list');
        $role6->givePermissionTo('offer-create');
        $role6->givePermissionTo('offer-edit');
        $role6->givePermissionTo('offer-delete');

        $role6->givePermissionTo('feedback-list');
        $role6->givePermissionTo('feedback-create');
        $role6->givePermissionTo('feedback-edit');
        $role6->givePermissionTo('feedback-delete');

        $user6->assignRole([$role6->id]);




    }
}
