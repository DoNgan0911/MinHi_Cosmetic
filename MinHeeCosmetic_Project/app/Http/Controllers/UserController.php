<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('HomeAdmin', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CreateUserAdmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','max:255','min:6'],
            'email'=> ['required','email'],
            'birthday'=> ['required','date'],
            'code'=> ['required','max:12','min:9'],
            "address"=>['required','min:10','max:255'],
            'phone'=> ['required','size:10']
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->birthday = $request->birthday;
        $user->role = "Employee";
        $user->postcode = $request->code;
        $user->enable = true;
        $user->address = $request->address;
        $user->password = "12345678";
        $user->email= $request->email;
        $user->phone = $request->phone;

        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
