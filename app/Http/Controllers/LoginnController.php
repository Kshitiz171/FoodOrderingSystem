<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;	
use App\Project\User;
use Auth;
use Validator;
use Session;

use Illuminate\Http\Request;

class LoginnController extends Controller
{
    //
    public function getlogin(){
        return view('Admin.login');

    }

    public function postLogin(Request $request){
         $obj=new Login();
$email=$request->get('email');
$password=$request->get('password');
  
$que=DB::select("select * from users where email='$email' and password='$password'");
  
//foreach ($que as $row) {
    # code...
  //  $role=$row->role;
  //}
  if($que){
  //if($role==1){
  //  Session::put('admin',$email);
    echo "user";
   // return redirect('Admin/category');
  }
  //else{
    //echo "admin";
    //Session::put('admin',$email);
    //return redirect('view/admindashboard');
//  }
//}
else{
echo "Sorry";
  //return redirect('Admin/login');
}

    }

}
