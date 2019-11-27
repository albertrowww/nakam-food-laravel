<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->string('fname');
            $table->string('minit');
            $table->string('lname');
            $table->email('email');
            $table->string('telp');
        });
    }
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
