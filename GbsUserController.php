<?php

namespace App\Http\Controllers;
use Illuminate\Support\messageBag;
use App\mentor;
use Illuminate\Support\Facades\Input;
use App\GbsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class GbsUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function UserDetials()
    {
       
        $users = GbsUser::all();
        
       return view('homepage.userdetails',compact('users'));
    }
    public function GbsUserStore(Request $request)
    {

            $GbsUser =new GbsUser();
            $GbsUser->fname=request('fname');
            $GbsUser->lname=request('lname');
            $GbsUser->email=request('email');
            $GbsUser->phn=request('phn');
            $GbsUser->pass=Hash::make(request('pass'));
            $GbsUser->EContacts=request('f1name')." ".request('f1email')." ".request('f1phn').",".request('f2name').request('f2email')." ".request('f2phn').",".request('f3name')." ".request('f3email')." ".request('f3phn');
            $GbsUser->save();
            return back()->with('success','Successfully registered!!');
    }
    public function CheckCredentials(Request $request)
    {
                        $UserEmail = $request->get('UserEmail');
                        $pass = ($request->get('UserPass'));
                        $c=1;
                       
                        $u =  GbsUser::where(['email' => $UserEmail])->first();
                        if($u)
                        {
                         if(Hash::check($pass, $u->pass))
                         {
                            return redirect(url('/profile'))->with('alert-success','you are now logged in');
                         }
                         else{
                           
                            return back()->with('error','Invalid Credentials!!');
                         }
                        }
        
    }
    public function SendMail()
    {
        return back()->with('success','Mail Sent');
    }
} 