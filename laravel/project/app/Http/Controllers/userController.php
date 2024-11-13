<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\contry;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function login()
    {
        return view('website.login');
    }

    public function auth_login(Request $request)
    {
    
        $email=$request->email;
        $password=$request->password;
        
        $data=user::where('email',$email)->first();  // get() array / first() single data 
        if($data)
        {
            if(Hash::check($password,$data->password))
            {
                if($data->status=="Unblock")
                {
                    // create
                    session()->put('userid',$data->id);
					session()->put('email',$data->email);
					session()->put('name',$data->name);

                    //session()->get('name') // name session print
                    //session()->pull('name') // session delete

                    echo "<script> 
                    alert('Login Suuceess !');
                    window.location='/';
                    </script>";
                }
                else
                {
                    echo "<script> 
                        alert('Blocked !'); 
                        window.location='/login';
                    </script>";
                   
                }
            }
            else
            {
                echo "<script> 
                        alert('Password not match !'); 
                        window.location='/login';
                    </script>";
                   
               
            }
        }
        else
        {
            echo "<script>
                alert('Username does not exits !');
                window.location='/login';
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
        $data=contry::all();
        return view('website.signup',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new user;

        $data->name=$request->name;
        $data->mobile=$request->mobile;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->gender=$request->gender;
        $data->lag=implode(",",$request->lag);
        $data->cid=$request->cid;

        // image upload
        $file=$request->file('img');
        $filename=time()."_img.".$request->file('img')->getClientOriginalExtension(); // get file ext
        $file->move('website/upload/user/',$filename); // move file in public path
        $data->img=$filename;

        $data->save();
        return redirect('/signup');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        $data=user::all();
        return view('admin.manage_user',['user'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user,$id)
    {
        $data=user::find($id);  // find data from table as per id
        $del_img=$data->img;
        $data->delete();    // then delete data
        unlink('website/upload/user/'.$del_img);

        return redirect('/manage_user'); // redirect after delete
    }
}
