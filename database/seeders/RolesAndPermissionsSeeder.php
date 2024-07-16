<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Role
        $superAdmin = Role::create(['name' =>'super-admin']);
        $admin = Role::create(['name' => 'admin']);
        $customer = Role::create(['name' => 'customer']);


        // Create Permission
        Permission::create(['name' => 'create_products']);
        Permission::create(['name' => 'edit_product']);
        Permission::create(['name' => 'delete_product']);
        Permission::create(['name' => 'view_product']);
        Permission::create(['name' => 'create_categories']);
        Permission::create(['name' => 'edit_category']);
        Permission::create(['name' => 'delete_category']);
        Permission::create(['name' => 'view_category']);
        Permission::create(['name' => 'create_orders']);
        Permission::create(['name' => 'edit_order']);
        Permission::create(['name' => 'delete_order']);
        Permission::create(['name' => 'view_order']);
        Permission::create(['name' => 'create_customers']);
        Permission::create(['name' => 'edit_customer']);
        Permission::create(['name' => 'delete_customer']);
        Permission::create(['name' => 'view_customer']);

        // Assign Permission to Role
        $superAdmin->givePermissionTo(Permission::all());
        $admin->givePermissionTo(['create_products', 'edit_product', 'view_product', 'create_categories', 'edit_category', 'view_category', 'create_orders', 'edit_order', 'view_order']);
    }
}
