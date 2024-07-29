<?php

namespace App\Http\Controllers\Permissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class PermissionController extends Controller
{
    public function index()
    {
        return view('permission.index');
    }

    public function create(): View
    {
        return view('permission.create');
    }

    public function edit(): View
    {
        return view('permission.index');
    }

    public function update(): View
    {
        return view('permission.index');
    }

    public function destroy(): View
    {
        return view('permission.index');
    }
}
