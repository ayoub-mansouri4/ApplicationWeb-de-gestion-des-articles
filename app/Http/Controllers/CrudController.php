<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Home.Eic.addEic');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        if($user->option=="Doctorant") return view('Home.Crud.InfoDoc',['user'=>$user]);
        elseif($user->option=="Editor_in_Chief") return view('Home.Crud.InfoEIC',['user'=>$user]);
        elseif($user->option=="Reviewer") return view('Home.Crud.InfoRev',['user'=>$user]);
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
        $user=User::findOrFail($id);
        $user->First_name=$request->input('First_name');
        $user->Last_name=$request->input('Last_name');
        $user->email=$request->input('email');
        $user->date_of_birth=$request->input('date_of_birth');
        if($request->input('password')!=null) $user->password=$request->input('password');
        $user->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
      
    }
}
