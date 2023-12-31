<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        return view('Admin.user.listuser');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.user.user-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return view('Admin.user.user-create');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return view('Admin.user.user-show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('Admin.user.user-edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        return view('Admin.user.user-edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // detele
    }
}
