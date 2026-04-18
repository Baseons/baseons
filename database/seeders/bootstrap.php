<?php

use App\Models\access_functions;
use App\Models\accesses;
use App\Models\functions;
use App\Models\modules;
use App\Models\users;
use Baseons\Collections\Hash;
use Baseons\Database\DB;

return new class
{
    public function run()
    {
        users::createOrIgnore([
            [
                'id' => 1,
                'id_access' => null,
                'id_user_create' => null,
                'active' => 1,
                'name' => 'Administrador',
                'email' => 'admin@hotmail.com',
                'password' => Hash::createPassword(123456789),
                'photo' => null,
                'cpf' => null,
                'cnpj' => null,
                'phone' => null,
                'cellphone' => null,
                'description' => null
            ],

            [
                'id' => 2,
                'id_access' => null,
                'id_user_create' => null,
                'active' => 1,
                'name' => 'User Test',
                'email' => 'test@hotmail.com',
                'password' => Hash::createPassword(123456789),
                'photo' => null,
                'cpf' => null,
                'cnpj' => null,
                'phone' => null,
                'cellphone' => null,
                'description' => null
            ]
        ]);

        modules::createOrIgnore([
            [
                'id' => 1,
                'id_user_create' => 1,
                'active' => 1,
                'display' => 1,
                'position' => 1,
                'name' => 'Usuários',
                'icon' => 'users_gear'
            ],

            [
                'id' => 2,
                'id_user_create' => 1,
                'active' => 1,
                'display' => 1,
                'position' => 999,
                'name' => 'Configurações',
                'icon' => 'gears'
            ]
        ]);

        functions::createOrIgnore([
            // users
            [
                'id' => 1,
                'id_module' => 1,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 1,
                'display_header' => 1,
                'name' => 'Visualizar',
                'key' => 'users.view',
                'route' => 'users.view',
                'description' => 'Visualizar usuários'
            ],

            [
                'id' => 2,
                'id_module' => 1,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 1,
                'display_header' => 1,
                'name' => 'Cadastrar',
                'key' => 'users.create',
                'route' => 'users.create',
                'description' => 'Cadastrar usuários'
            ],

            [
                'id' => 3,
                'id_module' => 1,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 0,
                'display_header' => 0,
                'name' => 'Editar',
                'key' => 'users.edit',
                'route' => 'users.edit',
                'description' => 'Editar usuários'
            ],

            [
                'id' => 4,
                'id_module' => 1,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 0,
                'display_header' => 0,
                'name' => 'Excluir',
                'key' => 'users.delete',
                'route' => 'users.delete',
                'description' => 'Excluir usuários'
            ],

            // config modules
            [
                'id' => 5,
                'id_module' => 2,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 1,
                'display_header' => 0,
                'name' => 'Módulos',
                'key' => 'configs.modules.view',
                'route' => 'configs.modules.view',
                'description' => 'Visualizar módulos'
            ],

            [
                'id' => 6,
                'id_module' => 2,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 0,
                'display_header' => 0,
                'name' => 'Cadastrar módulo',
                'key' => 'configs.modules.create',
                'route' => 'configs.modules.create',
                'description' => 'Cadastrar módulos'
            ],

            [
                'id' => 7,
                'id_module' => 2,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 0,
                'display_header' => 0,
                'name' => 'Editar módulo',
                'key' => 'configs.modules.edit',
                'route' => 'configs.modules.edit',
                'description' => 'Editar módulos'
            ],

            [
                'id' => 8,
                'id_module' => 2,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 0,
                'display_header' => 0,
                'name' => 'Excluir',
                'key' => 'configs.modules.delete',
                'route' => 'configs.modules.delete',
                'description' => 'Excluir módulos'
            ],

            // config accesses
            [
                'id' => 9,
                'id_module' => 2,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 1,
                'display_header' => 0,
                'name' => 'Acessos',
                'key' => 'configs.accesses.view',
                'route' => 'configs.accesses.view',
                'description' => 'Visualizar acessos'
            ],

            [
                'id' => 10,
                'id_module' => 2,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 0,
                'display_header' => 0,
                'name' => 'Cadastrar acesso',
                'key' => 'configs.accesses.create',
                'route' => 'configs.accesses.create',
                'description' => 'Cadastrar acessos'
            ],

            [
                'id' => 11,
                'id_module' => 2,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 0,
                'display_header' => 0,
                'name' => 'Editar acesso',
                'key' => 'configs.accesses.edit',
                'route' => 'configs.accesses.edit',
                'description' => 'Editar acessos'
            ],

            [
                'id' => 12,
                'id_module' => 2,
                'id_user_create' => 1,
                'active' => 1,
                'display_submenu' => 0,
                'display_header' => 0,
                'name' => 'Excluir',
                'key' => 'configs.accesses.delete',
                'route' => 'configs.accesses.delete',
                'description' => 'Excluir acessos'
            ]
        ]);

        accesses::createOrIgnore([
            'id' => 1,
            'active' => 1,
            'id_user_create' => 1,
            'name' => 'Super',
        ]);

        access_functions::createOrIgnore([
            // users
            [
                'id' => 1,
                'id_access' => 1,
                'id_function' => 1,
                'id_user_create' => 1,
            ],

            [
                'id' => 2,
                'id_access' => 1,
                'id_function' => 2,
                'id_user_create' => 1,
            ],

            [
                'id' => 3,
                'id_access' => 1,
                'id_function' => 3,
                'id_user_create' => 1,
            ],

            [
                'id' => 4,
                'id_access' => 1,
                'id_function' => 4,
                'id_user_create' => 1,
            ],

            // config modules
            [
                'id' => 5,
                'id_access' => 1,
                'id_function' => 5,
                'id_user_create' => 1,
            ],

            [
                'id' => 6,
                'id_access' => 1,
                'id_function' => 6,
                'id_user_create' => 1,
            ],

            [
                'id' => 7,
                'id_access' => 1,
                'id_function' => 7,
                'id_user_create' => 1,
            ],

            [
                'id' => 8,
                'id_access' => 1,
                'id_function' => 8,
                'id_user_create' => 1,
            ],

            // config accesses
            [
                'id' => 9,
                'id_access' => 1,
                'id_function' => 9,
                'id_user_create' => 1,
            ],

            [
                'id' => 10,
                'id_access' => 1,
                'id_function' => 10,
                'id_user_create' => 1,
            ],

            [
                'id' => 11,
                'id_access' => 1,
                'id_function' => 11,
                'id_user_create' => 1,
            ],

            [
                'id' => 12,
                'id_access' => 1,
                'id_function' => 12,
                'id_user_create' => 1,
            ]
        ]);

        users::update(['id' => [1, 2]], [
            'id_access' => 1,
            'id_user_create' => 1,
        ]);

        DB::scheme()->constraint()->setPrimarySequence('access_functions');
        DB::scheme()->constraint()->setPrimarySequence('accesses');
        DB::scheme()->constraint()->setPrimarySequence('functions');
        DB::scheme()->constraint()->setPrimarySequence('modules');
        DB::scheme()->constraint()->setPrimarySequence('users');
    }
};
