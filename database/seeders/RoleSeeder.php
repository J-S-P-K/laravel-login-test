<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use Illuminate\Database\Seeder;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() 
    {

        Permission::create(['name' => 'ver tareas']);
        Permission::create(['name' => 'crear tareas']);
        Permission::create(['name' => 'editar tareas']);
        Permission::create(['name' => 'borrar tareas']);

        $admin  = Role::create(['name' => 'admin']);
        $empleado  = Role::create(['name' => 'empleado']);
        
        $admin->givePermissionTo(Permission::all());
        $empleado->givePermissionTo('ver tareas');
        
    }
}