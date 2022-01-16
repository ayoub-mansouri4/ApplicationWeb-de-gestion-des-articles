<?php
use Illuminate\Support\Facades\Session;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');//user must be authenticated 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $user=auth()->user();
        $Fname=$user->First_name;
        $Lname=$user->Last_name;
        $email=$user->email;
        $option=$user->option;
        session(['option' =>$option]);
        session(['Fname'=>$Fname]);
        session(['Lname'=>$Lname]);
        session(['id'=>$user->id]);
        if($option=="Doctorant") return view('Home.doctor',['id'=>$user->id,'Fname'=>$Fname,'Lname'=>$Lname,'email'=>$email,'option'=>$option]);
        elseif($option=="Editor_in_Chief") return view('Home.EIC',['id'=>$user->id,'Fname'=>$Fname,'Lname'=>$Lname,'email'=>$email,'option'=>$option]);
        elseif ($option=="Reviewer") return view('Home.reviewer',['id'=>$user->id,'Fname'=>$Fname,'Lname'=>$Lname,'email'=>$email,'option'=>$option]);
    }
}
