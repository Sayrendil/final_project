<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        $permissions = [
            'products.*',
            'categories.*',
            'posts.*',
        ];

        foreach($permissions as $name) {
           $permission = Permission::create(['name' => $name]);
           $admin->givePermissionTo($permission);
        }

        $user = factory(User::class)->create([
            'email' => 'admin@mail.com'
        ]);
        
    }
}
