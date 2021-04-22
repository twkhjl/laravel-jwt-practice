<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TttController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth.api:api');

  }
  public function ttt()
  {
    return 'this is ttt page';
  }
}
