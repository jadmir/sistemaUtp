<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_editor = Role::create(['name' => 'editor']);

        $permisson_create_role = Permission::create(['name' => 'crear roles']);
        $permisson_read_role = Permission::create(['name' => 'leer roles']);
        $permisson_update_role = Permission::create(['name' => 'actualizar roles']);
        $permisson_delete_role = Permission::create(['name' => 'eliminar roles']);

        $permisson_create_tipoMarca = Permission::create(['name' => 'crear Tipos marcas']);
        $permisson_read_tipoMarca = Permission::create(['name' => 'leer Tipos marcas']);
        $permisson_update_tipoMarca = Permission::create(['name' => 'actualizar Tipos marcas']);
        $permisson_delete_tipoMarca = Permission::create(['name' => 'eliminar Tipos marcas']);

        $permisson_create_marca = Permission::create(['name' => 'crear marcas']);
        $permisson_read_marca = Permission::create(['name' => 'leer marcas']);
        $permisson_update_marca = Permission::create(['name' => 'actualizar marcas']);
        $permisson_delete_marca = Permission::create(['name' => 'eliminar marcas']);

        $permisson_create_modelo = Permission::create(['name' => 'crear modelo']);
        $permisson_read_modelo = Permission::create(['name' => 'leer modelo']);
        $permisson_update_modelo = Permission::create(['name' => 'actualizar modelo']);
        $permisson_delete_modelo = Permission::create(['name' => 'eliminar eliminar']);

        $permissons_admin = [$permisson_create_role, $permisson_read_role, $permisson_update_role, $permisson_delete_role, $permisson_create_tipoMarca, $permisson_read_tipoMarca, $permisson_update_tipoMarca, $permisson_delete_tipoMarca, $permisson_create_marca, $permisson_read_marca, $permisson_update_marca, $permisson_delete_marca, $permisson_create_modelo, $permisson_read_modelo, $permisson_update_modelo, $permisson_delete_modelo];

        $permissons_editor = [$permisson_create_tipoMarca, $permisson_read_tipoMarca, $permisson_update_tipoMarca, $permisson_delete_tipoMarca, $permisson_create_marca, $permisson_update_marca, $permisson_delete_marca, $permisson_create_modelo, $permisson_read_modelo, $permisson_update_modelo, $permisson_update_modelo];

        $role_admin->syncPermissions($permissons_admin);
        $role_editor->syncPermissions($permissons_editor);
    }
}
