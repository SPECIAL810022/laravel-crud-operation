<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

  
    // <===================================================================================>
    //    for data retrive from customers table usin get() method
    //                below example:-----
    // <===================================================================================>
            function show(){
              $allget= DB::table('customers')->get();
                return view('alluser',['data' => $allget]);
              
                
            }

       
    // <===================================================================================>
    //    for data retrive from customers table usin get() method.^
    // <===================================================================================>  
    
    
    
    // <===================================================================================>
    //    for data insert into customers table usin insert() method.
    //                below example:-----
    // <===================================================================================>
              public function adduser(Request $request){
               $insert= DB::table('customers')
                     ->insert([
                          'name'=> $request->name,
                          'number'=>$request->number,
                          'email'=>$request->email


                     ]);
                     if ($insert) {
                         return redirect()->route('home');
                     }
              }

              
    // <===================================================================================>
    //    for data retrive from customers table usin get() method.^
    // <===================================================================================>




    // <===================================================================================>
    //    this once also rettrive data from customers table,but only one rows data fetch
    //                below example:-----
    // <===================================================================================>

    public function single( string $id){
      $asif = DB::table('customers')->get()
                   ->where('id',$id);
        
      
      return view('singleuser', ['data'=> $asif]);
    }
    
    // <===================================================================================>
    //    this onec also rettrive data from customers table,but only one rows data fetch.^
    // <===================================================================================>


    
    // <===================================================================================>
    //    this once update data into customers table,route::(update)
    // <===================================================================================>


     public function updatepage(string $id){
      $user = DB::table('customers')
                 ->find($id);

                 return view('updateUser',['asif'=> $user]);
     }

     public function update(Request $request, string $id) {
      $asif = DB::table('customers')
                  ->where('id', $id)
                  ->update([
                      'name' => $request->name,
                      'number' => $request->number,
                      'email' => $request->email
                  ]);
  
      
          return redirect()->route('home'); // Use 'home' as the route name here
      
  }
  
    
    // <===================================================================================>
    //    this onec also rettrive data from customers table,^
    // <===================================================================================>






    
    // <===================================================================================>
    //    this onec delete data from customers table, only one rows data though 'id' selector.
    // <===================================================================================>


    public function delete(string $id){
      $delete = DB::table('customers')
                  ->where('id',$id)
                  ->delete();

                  if ($delete) {
                       return redirect()->route('home');
                  }
    }

    
    // <===================================================================================>
    //    this onec delete data from customers table, only one rows data though 'id' selector.
    // <===================================================================================>
}
