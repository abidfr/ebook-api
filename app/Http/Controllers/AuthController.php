<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119001,
        'name' => 'Abid Fadillah Rifky',
        'gender' => 'Male',
        'phone' => '087705450381',
        'class' => 'XII RPL 1'];
  }
}