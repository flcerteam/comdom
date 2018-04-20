<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationsController extends Controller
{
  public function getInfo(Request $req) {

      return view('page.location', []);

  }
}
