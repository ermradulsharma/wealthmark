<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WealthmarkAdminController extends Controller
{
    /**
     * Display the admin login page.
     */
    public function admin_login()
    {
        return view('admin.auth.login');
    }

    /**
     * Display the admin dashboard.
     */
    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Manage chat interface.
     */
    public function manage_chat()
    {
        return view('admin.chat.manage');
    }

    /**
     * New chat interface.
     */
    public function new_chat()
    {
        return view('admin.chat.new');
    }
}
