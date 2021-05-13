<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  {
       $role1= Role::create(['name'=>'Admin']);
       $role2= Role::create(['name'=>'user']);
       Permission::create(['name'=>'admin.home'])->assignrole($role1);
       Permission::create(['name'=>'admin.categories.index'])->assignrole($role1);
       Permission::create(['name'=>'admin.categories.create'])->assignrole($role1);
       Permission::create(['name'=>'admin.categories.edit'])->assignrole($role1);
       Permission::create(['name'=>'admin.categories.destroy'])->assignrole($role1);

       
    }
}
