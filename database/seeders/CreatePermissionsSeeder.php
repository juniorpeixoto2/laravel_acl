<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreatePermissionsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $permissions = array(
            array('id' => '1', 'name' => 'home.index', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '2', 'name' => 'register.show', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '3', 'name' => 'register.perform', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '4', 'name' => 'login.show', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '5', 'name' => 'login.perform', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '6', 'name' => 'logout.perform', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '7', 'name' => 'users.index', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '8', 'name' => 'users.create', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '9', 'name' => 'users.store', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '10', 'name' => 'users.show', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '11', 'name' => 'users.edit', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '12', 'name' => 'users.update', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '13', 'name' => 'users.destroy', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '14', 'name' => 'posts.index', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '15', 'name' => 'posts.create', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '16', 'name' => 'posts.store', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '17', 'name' => 'posts.show', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '18', 'name' => 'posts.edit', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '19', 'name' => 'posts.update', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '20', 'name' => 'posts.destroy', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '21', 'name' => 'roles.index', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '22', 'name' => 'roles.create', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '23', 'name' => 'roles.store', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '24', 'name' => 'roles.show', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:46', 'updated_at' => '2022-06-03 19:48:46'),
            array('id' => '25', 'name' => 'roles.edit', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47'),
            array('id' => '26', 'name' => 'roles.update', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47'),
            array('id' => '27', 'name' => 'roles.destroy', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47'),
            array('id' => '28', 'name' => 'permissions.index', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47'),
            array('id' => '29', 'name' => 'permissions.create', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47'),
            array('id' => '30', 'name' => 'permissions.store', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47'),
            array('id' => '31', 'name' => 'permissions.show', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47'),
            array('id' => '32', 'name' => 'permissions.edit', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47'),
            array('id' => '33', 'name' => 'permissions.update', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47'),
            array('id' => '34', 'name' => 'permissions.destroy', 'guard_name' => 'web', 'created_at' => '2022-06-03 19:48:47', 'updated_at' => '2022-06-03 19:48:47')
        );

        Permission::insert($permissions);
    }
}
