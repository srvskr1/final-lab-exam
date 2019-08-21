<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(Request $req){
		return view('customer.index');
	}
	public function reg(Request $req){
		return view('customer.registration');
	}
	public function regcus(Request $req){



		
		$user = new User();
    	$user->username = $req->uname;
    	$user->password = $req->password;
    	$user->Name = $req->name;
    	$user->email = $req->email;
    	$user->type = "customer";
    	$user->save();

		return redirect('/login');
	}
}
