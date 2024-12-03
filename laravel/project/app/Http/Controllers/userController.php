<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\contry;
use Illuminate\Http\Request;

// import for mail
use App\Mail\welcome_mail;
use Illuminate\Support\Facades\Mail;


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
    
        $validated = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:3|max:12'
        ]);

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
    
    function userlogout(){

        session()->pull('userid');
		session()->pull('email');
		session()->pull('name');
        echo "<script>
            alert('User Logout Success !');
            window.location='/index';
        </script>";

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
        $validated = $request->validate([
            'name'=>'required|alpha:ascii',
            'email'=> 'required|email',
            'mobile'=> 'required|digits:10',
            'password'=> 'required|min:3|max:12',
            'gender' => ['required', 'in:Male,Female'],
            'lag' => 'required',
            'cid' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $data=new user;

        $data->name=$request->name;
        $data->mobile=$request->mobile;
 $email=$data->email=$request->email;
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

        $emaildata=array("name"=>$request->name,"email"=>$request->email);
        Mail::to($email)->send(new welcome_mail($emaildata));

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


    public function userprofile()
    {
        $id=session()->get('userid');
        $data=user::where('id',$id)->first();
        return view('website.userprofile',['user'=>$data]);
    }

    public function edit(user $user,$id)
    {
        $data=user::find($id);
        $country=contry::all();
        return view('website.edituser',['user'=>$data,'country'=>$country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user,$id)
    {
        /*
        $validated = $request->validate([
            'name'=>'required|alpha:ascii',
            'email'=> 'required|email',
            'mobile'=> 'required|digits:10',
            'gender' => ['required', 'in:Male,Female'],
            'lag' => 'required',
            'cid' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        */
        $data=user::find($id);

        $data->name=$request->name;
        $data->mobile=$request->mobile;
        $data->email=$request->email;
        $data->gender=$request->gender;
        $data->lag=implode(",",$request->lag);
        $data->cid=$request->cid;

        // image upload
        if($request->hasFile('img'))
        {
            $old_img=$data->img;
            $file=$request->file('img');
            $filename=time()."_img.".$request->file('img')->getClientOriginalExtension(); // get file ext
            $file->move('website/upload/user/',$filename); // move file in public path
            $data->img=$filename;
            unlink('website/upload/user/'.$old_img);
        }
        $data->update();
        return redirect('/userprofile');
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
