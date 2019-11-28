@extends('layouts.app')
 
@section('content')
 
    <h2>Register</h2>
    <form method="post" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="telepon_pelangaan">Nomor Telepon:</label>
            <input type="text" class="form-control" id="telepon_pelangaan" name="telepon_pelangaan">
        </div>
 
        <div class="form-group">
            <label for="nama_depan">Nama Depan:</label>
            <input type="text" class="form-control" id="nama_depan" name="nama_depan">
        </div>
 
        <div class="form-group">
            <label for="Inisial_tengah">Inisial Tengah:</label>
            <input type="char" class="form-control" id="Inisial_tengah" name="Inisial_tengah">
        </div>
 
        <div class="form-group">
            <label for="nama_belakang">Nama Belakang:</label>
            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang">
        </div>

        <div class="form-group">
            <label for="surel">Email:</label>
            <input type="email" class="form-control" id="surel" name="surel">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
 
@endsection