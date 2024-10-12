<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        
    }

    

    public function store(Request $request)
    {
       
        $user = User::where('nome', $request->input('nome'))->first();
       
        if(!$user){
            return redirect()->route('users.index');
        }

        if(!password_verify($request->input('senha'), $user->senha)){
            return redirect()->route('users.index'); 
        }

        return redirect()->route('home'); 
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
