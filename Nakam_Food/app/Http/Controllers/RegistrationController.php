<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Register;
 
class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    
    public function store(Request $request)
    {
        $this->validate(request(), [
            'fname' => 'required',
            'minit' => 'required',
            'lname' => 'required',
            'telp' => 'required'
        ]);

        $pelanggan = new Register;
        $pelanggan->nama_depan = $request->input('fname');
        $pelanggan->nama_tengah = $request->input('minit');
        $pelanggan->nama_belakang = $request->input('lname');
        $pelanggan->surel = $request->input('email');
        $pelanggan->telepon_pelanggan = $request->input('telp');
        $pelanggan->save();

        return redirect('/');
    }
}
