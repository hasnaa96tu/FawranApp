<?php

use Illuminate\Database\Seeder;
use App\User;
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

        $user2->assignRole([$role2->id]);

        $role3 = Role::create(['name' => 'driver']);

        $role3->givePermissionTo('order-list');



        $user3->assignRole([$role3->id]);

        $role4 = Role::create(['name' => 'customer']);

        $role4->givePermissionTo('order-list');
        $role4->givePermissionTo('order-create');
        $role4->givePermissionTo('order-edit');
        $role4->givePermissionTo('order-cancel');


        $user4->assignRole([$role4->id]);



    }
}
