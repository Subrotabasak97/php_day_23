<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $fullName;
    public function fullName(Request $request){

        $this->fullName =  $request->f_name. ' '.$request->l_name;
        return view('test', ['result' => $this->fullName]);
    }
}
