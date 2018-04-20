<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationDetailsController extends Controller
{
  public function getInfo(Request $req) {

      return view('page.dtl_location', []);

  }
}
