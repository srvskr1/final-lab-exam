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
}
