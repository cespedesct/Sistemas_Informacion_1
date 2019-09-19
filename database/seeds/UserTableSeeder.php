<?php

use Illuminate\Database\Seeder;
use Finilager\User;
use Finilager\Rol;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       $role_user=Rol::where('nombre','Usuario')->first();
            $role_admin=Rol::where('nombre','Administrador')->first();
            $user=new User();
            $user->name= "root";
            $user->email="root@admin.com";
            $user->email_verified_at="2000-01-01 00:00:00";
            $user->password= bcrypt("123456");
            // $user->remember_token="null";
            $user->created_at="2000-01-01 00:00:00";
            $user->updated_at="2000-01-01 00:00:00";
            $user->save();
            $user->roles()->attach($role_user);
            $user->roles()->attach($role_admin);
        
    }
}
