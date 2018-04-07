<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function login(){
      $userId = 'trung@gmail.com';
      $password= '123142';
      $user= User::all();
      foreach ($user as $item) {
        if($userId == $item->email){
          if($password == $item->password){
            echo('Login success!! WellCome'.$userId);
          }
        }
      }
    }
}
