<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
class EmployeeController extends Controller
{
    //
    public function index(){
    
        if(Auth::user()->id==1){
        $data=DB::table('employees')->where('id','!=',1)->get();
        }
        else{

            $data=DB::table('employees')->where('link_id',Auth::user()->id)->get();
        }
        return view('employee.index',compact('data'));
    }
    public function create(){

        $data=DB::table('users')->where('id','!=',1)->get();
        return view('employee.create',compact('data'));
    }

    public function store(Request $req){

        $name=$req->first_name.' '.$req->last_name;
        //dd($req);
        DB::table('users')->insert([
                'name'=>$name,
                'email'=>$req->email,
                'password'=>Hash::make($req->password)

        ]);
        $data= DB::table('users')->orderby('id','desc')->first();
        DB::table('employees')->insert([
                'first_name'=>$req->first_name,
                'last_name'=>$req->last_name,
                'title'=>$req->title,
                'city'=>$req->city,
                'state'=>$req->state,
                'link_id'=>$req->link_id,
                'user_id'=>$data->id

        ]);
        return redirect()->route('employees.index');
    }
}
