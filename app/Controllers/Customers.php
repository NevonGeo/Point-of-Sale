<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        
        $customers = [
            ['full_name' => 'Lindbergh Falqueza',    'email' => 'lindbergh.falqueza@gmail.com',    'phone' => '0915-482-7361'],
            ['full_name' => 'Michael Bersamin',  'email' => 'michael.bersamin@yahoo.com',   'phone' => '0917-641-9583'],
            ['full_name' => 'Youto Morinaga',       'email' => 'youto.morinaga@gmail.com',       'phone' => '0916-593-8247'],
            ['full_name' => 'Miguel Cacho', 'email' => 'miguel.cacho@yahoo.com', 'phone' => '0919-836-4275'],
            ['full_name' => 'Lee Francis Mabanto',       'email' => 'lee.francis.mabanto@gmail.com',       'phone' => '0921-567-8901'],
        ];

        return view('customers/index', ['customers' => $customers]);
    }
}
