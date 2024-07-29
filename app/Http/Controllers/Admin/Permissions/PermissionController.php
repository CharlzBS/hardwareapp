<?php

namespace App\Http\Controllers\Admin\Permissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permission.index');
    }

    public function create(): View
    {
        return view('admin.permission.create');
    }

    public function edit(): View
    {
        return view('admin.permission.index');
    }

    public function update(): View
    {
        return view('admin.permission.index');
    }

    public function destroy(): View
    {
        return view('admin.permission.index');
    }
}
