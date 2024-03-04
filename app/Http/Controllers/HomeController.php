<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    //

    public function index(){
        return view('index');
    }
    public function register(){
        return view('register');
    }
    public function do_register(Request $request){
        Employee::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'number'=>$request->number,
        ]);
        return redirect()->route('register')->with('success','register successfully');
    }
    public function view(){
        $data =Employee::all();
        return view('view',compact('data'));
    }
  
    public function edit($id){
        $data=Employee::find($id);
        return view('edit',compact('data'));
    }
    public function update(Request $request ,$id){
         $dd=Employee::find($id);

         $dd->update([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>$request->password,
           'number'=>$request->number,

         ]);
         return redirect()->route('view')->with('success','update');
    }
    public function delete($id){
        Employee::find($id)->delete();
        return redirect()->route('view')->with('success','delete successfully');
    }
   
}
