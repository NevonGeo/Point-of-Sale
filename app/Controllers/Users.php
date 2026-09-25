<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        
        $users = [
            ['username' => 'jn0001',   'full_name' => 'Justin Nepomuceno',    'role' => 'Admin'],
            ['username' => 'ka0101',     'full_name' => 'King Ambulo',      'role' => 'Cashier'],
            ['username' => 'hp0102',    'full_name' => 'Hans Pomida',      'role' => 'Cashier'],
            ['username' => 'sg1001', 'full_name' => 'John Sanggalang',  'role' => 'Inventory Clerk'],
            ['username' => 'dr0011',   'full_name' => 'Jsean Del Rosario',     'role' => 'Manager'],
            ['username' => 'mc0103',    'full_name' => 'Mylz Cruz',    'role' => 'Cashier'],
        ];

        return view('users/index', ['users' => $users]);
    }
}
