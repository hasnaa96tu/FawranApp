<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [

           'role-list',
           'role-create',
           'role-edit',
           'role-delete',

           'user-type-list',
           'user-type-create',
           'user-type-edit',
           'user-type-delete',

           'user-list',
           'user-create',
           'user-edit',
           'user-delete',

           'type-list',
           'type-create',
           'type-edit',
           'type-delete',

           'category-list',
           'category-create',
           'category-edit',
           'category-delete',

           'customer-list',
           'customer-create',
           'customer-edit',
           'customer-delete',

           'order-list',
           'order-create',
           'order-edit',
           'order-delete',
           'order-accept',
           'order-reject',
           'order-cancel',

           'pharmacy-list',
           'pharmacy-create',
           'pharmacy-edit',
           'pharmacy-delete',

           'supermarket-list',
           'supermarket-create',
           'supermarket-edit',
           'supermarket-delete',

           'company-list',
           'company-create',
           'company-edit',
           'company-delete',

           'drug-list',
           'drug-create',
           'drug-edit',
           'drug-delete',

           'product-list',
           'product-create',
           'product-edit',
           'product-delete',

           'offer-list',
           'offer-create',
           'offer-edit',
           'offer-delete',

           'feedback-list',
           'feedback-create',
           'feedback-edit',
           'feedback-delete',

           'apprate-list',
           'apprate-create',
           'apprate-edit',
           'apprate-delete',


        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
