<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;
 
class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'fname' => 'required',
            'minit' => 'required',
            'lname' => 'required',
            'surel' => 'required|email',
            'telp' => 'required'
        ]);
        
        $user = user::create(request(['fname', 'minit', 'lname','surel', 'telp']));
        
        auth()->login($user);
        
        return redirect()->to('/');
    }
}
