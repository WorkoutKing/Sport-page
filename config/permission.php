<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Role and Permission Models
    |--------------------------------------------------------------------------
    |
    | When using the "HasRoles" trait from this package, we need to know which
    | Eloquent models should be used to retrieve your roles and permissions.
    |
    */

    'models' => [
        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your roles. Of course, it
         * is often just the "Role" model but you may use whatever you like.
         *
         * The model you want to use as a Role model needs to implement the
         * `Spatie\Permission\Contracts\Role` contract.
         */

        'role' => Spatie\Permission\Models\Role::class,

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your permissions. Of course, it
         * is often just the "Permission" model but you may use whatever you like.
         *
         * The model you want to use as a Permission model needs to implement the
         * `Spatie\Permission\Contracts\Permission` contract.
         */

        'permission' => Spatie\Permission\Models\Permission::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Connection
    |--------------------------------------------------------------------------
    |
    | You can set a specific database connection for roles and permissions
    | tables here. If it's not set, it will use the main database connection.
    |
    */

    'table_names' => [

        /*
         * The table that is used for storing roles
         */
        'roles' => 'roles',

        /*
         * The table that is used for storing permissions
         */
        'permissions' => 'permissions',

        /*
         * The table that is used for associating roles with users
         */
        'model_has_roles' => 'model_has_roles',

        /*
         * The table that is used for associating permissions with users
         */
        'model_has_permissions' => 'model_has_permissions',

        /*
         * The table that is used for associating permissions with roles
         */
        'role_has_permissions' => 'role_has_permissions',
    ],

    /*
    |--------------------------------------------------------------------------
    | Foreign Key Constraints
    |--------------------------------------------------------------------------
    |
    | Whether the related model should use foreign key constraints.
    |
    */

    'foreign_keys' => [

        /*
         * Enabling this option will create foreign key constraints between the
         * roles table and the model_has_roles & role_has_permissions tables.
         */
        'enforce_foreign_keys' => true,
    ],

];
