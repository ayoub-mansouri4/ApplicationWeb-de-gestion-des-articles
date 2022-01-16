<?php

namespace App\Http\Controllers;
use App\Models\Planning;
use App\Models\User;
use Illuminate\Http\Request;

class PlanningController extends Controller
{
    public function index(){
        $doc=User::cursor();
        return view('Home.Eic.planning',['docs'=>$doc]);
    }
    public function store(Request $request){
        $planning=new Planning();
        $planning->id_user=session()->get('id');
        $planning->id_doc=$request->get('id_doc');
        $planning->title=$request->input('title');
        $planning->desc=$request->input('desc');
        $planning->link=$request->input('link');
        $planning->Date_palnning=$request->input('DatePlanning');
        $planning->time_palnning=$request->input('TimePlanning');
        $planning->save();
        $request->session()->flash('Planning','Vous avez specifié un Planning ');
        return redirect()->route('ShowPlanning');
    }

     public function workshops(){
        $workshop=Planning::cursor();
         if(session()->get('option')=='Reviewer') return view('Home.Reviewer.workshop',['workshops'=>$workshop]);
         if(session()->get('option')=='Doctorant') return view('Home.Doc.workshop',['workshops'=>$workshop]);

     }

}
