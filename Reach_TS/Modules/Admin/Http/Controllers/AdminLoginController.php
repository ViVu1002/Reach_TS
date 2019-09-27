<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminLoginController extends Controller
{
    public function login()
    {
        return view('admin::admin.admin_login');
    }
}
