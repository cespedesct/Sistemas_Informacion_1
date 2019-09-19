<?php

use Illuminate\Database\Seeder;
use Finilager\Rol;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=new Rol();
        $role->nombre="Administrador";
        $role->descripcion="Usuario de Empleado Administrativo";
        $role->save();
        
        $role=new Rol();
        $role->nombre="Usuario";
        $role->descripcion="Usuario de Empleado Administrativo";
        $role->save();

        $role=new Rol();
        $role->nombre="Vendedor";
        $role->descripcion="Usuario de Empleado Vendedor";
        $role->save();
        
        $role=new Rol();
        $role->nombre="Almacenero";
        $role->descripcion="Usuario de Empleado Almacenero";
        $role->save();
    }
}
