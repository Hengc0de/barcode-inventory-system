<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class profileupdate extends Controller
{
   public function create_selectdata(){
 $show =  user::select()->get();
 return $show;
   }
}
