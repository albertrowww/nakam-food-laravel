@extends('layouts.app')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Register</h1>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/registerPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="fname">Nama Depan:</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="form-group">
                    <label for="minit">Nama Tengah:</label>
                    <input type="text" class="form-control" id="minit" name="minit">
                </div>
                <div class="form-group">
                    <label for="lname">Nama Belakang:</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                </div>
                <div class="form-group">
                    <label for="surel">Surel:</label>
                    <input type="email"  class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                        <label for="telp">Nomor Telepon:</label>
                        <input type="text"  class="form-control" id="telp" name="telp">
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection