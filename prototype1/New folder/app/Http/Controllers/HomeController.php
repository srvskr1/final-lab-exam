<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\medicine;
use Validator;
use App\Http\Requests\StudentRequest;

class HomeController extends Controller
{


    public function index(Request $req){
		return view('home.index');
	}

    public function add(){
    	return view('home.add');
    }

    public function create(StudentRequest $req){

/*        $this->validate($req, [

            "uname"     => "required | unique:users,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "dept"      => "required",
            "cgpa"      => "required"
        ]);*/

/*        $req->validate([

            "uname"     => "required | unique:users,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "dept"      => "required",
            "cgpa"      => "required"
        ]);*/

/*        $validator = Validator::make($req->all(), [

            "uname"     => "required | unique:users,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "dept"      => "required",
            "cgpa"      => "required"
        ])->validate();*/
        
        //$validator->validate();

        /*if($validator->fails()){

            //dd($validator);
            return back()
                    ->with('errors', $validator->errors());
        } */     

    	$user = new User();
    	$user->username = $req->uname;
    	$user->password = $req->password;
    	$user->Name = $req->name;
    	$user->email = $req->email;
    	$user->type = "admin";
    	$user->save();

    	$data = User::where('username', $req->uname)->where('password', $req->password)->get();
    	return redirect()->route('home.details', $data[0]->id);
    }

	public function details($id){

		$std = User::find($id);
		
		return view('home.details', ['std'=>$std]);
    }

    public function show(){

    	$stdList = User::where('type','customer')->get();

        //return json($stdlist);
       /* echo $stdList;*/
    	return view('home.stdlist', ['std'=> $stdList]);
    }
	
	public function edit($id){

		$std = User::find($id);
		return view('home.edit', ['std'=>$std]);
    }

    public function update(Request $req, $id){
        $request= $req->session()->get('username');
    	$user = User::find($id);

    	$user->username = $request;
    	$user->Name = $req->name;
    	$user->email = $req->email;
    	
    	$user->save();

		return redirect()->route('home.profile');
    }
	public function delete($id){

		$std = User::find($id);
		return view('home.delete', ['std'=>$std]);
    }

    public function destroy($id){

		User::destroy($id);
		return redirect()->route('home.stdlist');
	}

    public function profile(Request $req){

        $request= $req->session()->get('username');
        $stdList = User::where('username',$request)->get();

        //echo $stdList;
        return view('home.profile', ['std'=> $stdList[0]]);
        
    }

    public function upload(Request $req){


        if($req->hasFile('pic')){

            $file = $req->file('pic');

/*          echo "Name: ".$file->getClientOriginalName();
            echo "<br>Extension: ".$file->getClientOriginalExtension();
            echo "<br>Size: ".$file->getSize();
            echo "<br>Mime Type: ".$file->getMimeType();
*/
            if($file->move('upload', $file->getClientOriginalName())){
                echo "success";
            }else{
                echo "error";
            }

        }else{
            echo "File upload error!";
        }

    }

    public function showmedi(){

        $stdList = medicine::all();

        //return json($stdlist);
       /* echo $stdList;*/
        return view('home.medilist', ['std'=> $stdList]);
    }

    public function addmedi(){

        

        //return json($stdlist);
       /* echo $stdList;*/
        return view('home.addmedi');
    }

    public function savemedi(Request $req){



        
        $user = new medicine();
        $user->name = $req->name;
        $user->type = $req->type;
        $user->category = $req->category;
        $user->vendor_name = $req->vendor_name;
        $user->price = $req->price;
        $user->save();

        return redirect()->route('home.medilist');
    }
}




