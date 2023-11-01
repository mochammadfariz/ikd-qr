<?php

namespace App\Statics\User;

class Role
{
    static $SUPER_ADMIN = 1;
    static $DEVELOPER = 2;

    static function getAll()
    {
        return [
            self::$SUPER_ADMIN,
            self::$DEVELOPER,
        ];
    }

    static function getAllForCreate()
    {
        return [
            [
                'id' => self::$SUPER_ADMIN,
                'name' => 'Super Admin',
                'permissions' => [
                    Permission::$USER_ACCESS,
                    Permission::$USER_SHOW,
                    Permission::$USER_CREATE,
                    Permission::$USER_EDIT,
                    Permission::$USER_DELETE,
                    Permission::$USER_RESET_PASSWORD,
                    Permission::$USER_UNBLOCK,
                    Permission::$USER_REMOVE_IP,
                    Permission::$USERS_LAST_SEEN,
                    Permission::$USERS_LOG_ACTIVITY,

                    Permission::$MENU_ACCESS,
                    Permission::$MENU_CREATE,
                    Permission::$MENU_EDIT,
                    Permission::$MENU_DELETE,

                    Permission::$JABATAN_ACCESS,
                    Permission::$JABATAN_CREATE,
                    Permission::$JABATAN_EDIT,
                    Permission::$JABATAN_DELETE,

                    Permission::$WAKTU_ACCESS,
                    Permission::$WAKTU_CREATE,
                    Permission::$WAKTU_EDIT,
                    Permission::$WAKTU_DELETE,

                    Permission::$LAYANAN_ACCESS,
                    Permission::$LAYANAN_CREATE,
                    Permission::$LAYANAN_EDIT,
                    Permission::$LAYANAN_DELETE,

                    Permission::$JASA_ACCESS,
                    Permission::$JASA_CREATE,
                    Permission::$JASA_EDIT,
                    Permission::$JASA_DELETE,

                    Permission::$CABANG_ACCESS,
                    Permission::$CABANG_CREATE,
                    Permission::$CABANG_EDIT,
                    Permission::$CABANG_DELETE,

                    Permission::$ROLE_ACCESS,
                    Permission::$ROLE_CREATE,
                    Permission::$ROLE_EDIT,

                    Permission::$PERMISSION_ACCESS,
                    Permission::$PERMISSION_CREATE,
                    Permission::$PERMISSION_EDIT,

                    Permission::$SECURITY,
                ],
                'menus' => [
                    Menu::$DASHBOARD,

                    Menu::$UTILITY,
                    Menu::$UTILITY_USER,
                    Menu::$UTILITY_ROLE,
                    Menu::$UTILITY_MENU,
                    Menu::$UTILITY_PERMISSION,
                    Menu::$UTILITY_SECURITY,
                    Menu::$UTILITY_JABATAN,
                    Menu::$UTILITY_WAKTU,
                    Menu::$UTILITY_LAYANAN,
                    Menu::$UTILITY_JASA,
                    Menu::$UTILITY_CABANG,

                    Menu::$USERS_ACTIVITY,
                    Menu::$USERS_ACTIVITY_LAST_SEEN,
                    Menu::$USERS_ACTIVITY_LOG_ACTIVITY,
                ],
            ],
            [
                'id' => self::$DEVELOPER,
                'name' => 'Developer',
                'permissions' => [
                    Permission::$USER_ACCESS,
                    Permission::$USER_SHOW,
                    Permission::$USER_CREATE,
                    Permission::$USER_EDIT,
                    Permission::$USER_DELETE,
                    Permission::$USER_RESET_PASSWORD,
                    Permission::$USER_UNBLOCK,
                    Permission::$USER_REMOVE_IP,
                    Permission::$USERS_LAST_SEEN,
                    Permission::$USERS_LOG_ACTIVITY,
                    Permission::$DECRYPT,

                    Permission::$MENU_ACCESS,
                    Permission::$MENU_CREATE,
                    Permission::$MENU_EDIT,
                    Permission::$MENU_DELETE,

                    Permission::$JABATAN_ACCESS,
                    Permission::$JABATAN_CREATE,
                    Permission::$JABATAN_EDIT,
                    Permission::$JABATAN_DELETE,

                    Permission::$WAKTU_ACCESS,
                    Permission::$WAKTU_CREATE,
                    Permission::$WAKTU_EDIT,
                    Permission::$WAKTU_DELETE,

                    Permission::$LAYANAN_ACCESS,
                    Permission::$LAYANAN_CREATE,
                    Permission::$LAYANAN_EDIT,
                    Permission::$LAYANAN_DELETE,

                    Permission::$JASA_ACCESS,
                    Permission::$JASA_CREATE,
                    Permission::$JASA_EDIT,
                    Permission::$JASA_DELETE,

                    Permission::$CABANG_ACCESS,
                    Permission::$CABANG_CREATE,
                    Permission::$CABANG_EDIT,
                    Permission::$CABANG_DELETE,

                    Permission::$ROLE_ACCESS,
                    Permission::$ROLE_CREATE,
                    Permission::$ROLE_EDIT,

                    Permission::$PERMISSION_ACCESS,
                    Permission::$PERMISSION_CREATE,
                    Permission::$PERMISSION_EDIT,

                    Permission::$SECURITY,
                ],
                'menus' => [
                    Menu::$DASHBOARD,

                    Menu::$UTILITY,
                    Menu::$UTILITY_USER,
                    Menu::$UTILITY_ROLE,
                    Menu::$UTILITY_MENU,
                    Menu::$UTILITY_PERMISSION,
                    Menu::$UTILITY_SECURITY,
                    Menu::$UTILITY_JABATAN,
                    Menu::$UTILITY_WAKTU,
                    Menu::$UTILITY_LAYANAN,
                    Menu::$UTILITY_JASA,
                    Menu::$UTILITY_CABANG,
                    
                    Menu::$USERS_ACTIVITY,
                    Menu::$USERS_ACTIVITY_LAST_SEEN,
                    Menu::$USERS_ACTIVITY_LOG_ACTIVITY,
                ],
            ],
        ];
    }
}
