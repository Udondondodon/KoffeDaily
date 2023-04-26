<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mitra;

class RegisterController extends Controller
{
    function index() {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    function admin() {
        return view('admin.register.index', [
            'title' => 'Register Admin'
        ]);
    }
    function mitra() {
        return view('mitra.register.index', [
            'title' => 'Register Mitra'
        ]);
    }


    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'birthdate' => 'required',
            'email' => 'required|email:dns',
            'phone_number' => ['required', 'regex:/^0[0-9]{9,11}$/'],
            'address' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'username' => 'required|min:3|max:15',
            'password' => 'required|min:5|max:15',
            'role' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }

    public function storemi(Request $request) 
    {

        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email:dns',
            'phone_number' => ['required', 'regex:/^0[0-9]{9,11}$/'],
            'address' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'username' => 'required|min:3|max:15',
            'password' => 'required|min:5|max:15',
            'image' => 'image|file|max:2048',
            'role' => 'required',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }

    public function storeadmin(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email:dns',
            'divisi' => 'required',
            'username' => 'required|min:3|max:15',
            'password' => 'required|min:5|max:15',
            'role' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}
