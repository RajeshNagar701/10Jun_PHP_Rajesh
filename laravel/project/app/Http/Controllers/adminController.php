<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function login()
     {
        return view('admin.login');
     }
 
     public function auth_admin(Request $request)
     {
     
         $email=$request->email;
         $password=$request->password;
         
         $data=admin::where('email',$email)->first();  // get() array / first() single data 
         if($data)
         {
             if(Hash::check($password,$data->password))
             {
                
                     session()->put('adminid',$data->id);
                     session()->put('adminemail',$data->email);
                     session()->put('adminname',$data->name);

                     echo "<script> 
                     alert('Login Suuceess !');
                     window.location='/dashboard';
                     </script>";
                
             }
             else
             {
                 echo "<script> 
                         alert('Password not match !'); 
                         window.location='/admin-login';
                     </script>";
                    
                
             }
         }
         else
         {
             echo "<script>
                 alert('Username does not exits !');
                 window.location='/admin-login';
              </script>";
             
         }
 
     }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
