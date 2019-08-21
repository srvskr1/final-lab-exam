<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\medicine;
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
	public function showmedi(){

        $stdList = medicine::all();

        //return json($stdlist);
       /* echo $stdList;*/
        return view('customer.medilist', ['std'=> $stdList]);
    }
    public function profile(Request $req){

        $request= $req->session()->get('username');
        $stdList = User::where('username',$request)->get();

        //echo $stdList;
        return view('customer.profile', ['std'=> $stdList[0]]);
        
    }
    public function cart(Request $req,$id){

        //$request= $req->session()->get('username');
        $stdList = medicine::find($id);

        
        global $temp;
        $temp = $stdList['price'];
        $tr= "1";
        //echo $tr;
        return view('customer.cart', ['std'=> $stdList],['new'=>$temp,'cr'=>$tr]);
        
    }
    public function cartadd(Request $req,$id){

        //$request= $req->session()->get('username');
        $stdList = medicine::find($id);

        global $temp;
        $temp = $stdList['price'];
        $tm = $temp * ($req->number);
        $tr= $req->number;
        return view('customer.cart', ['std'=> $stdList],['new'=>$tm,'cr'=>$tr]);
        
    }

}
