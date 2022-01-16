<?php

namespace App\Http\Controllers;
use App\Models\Criterion;
use App\Models\StatusReviewer;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function index(){
        return view('Home.Eic.criteria');
    }

    public function store(Request $request){
        $criteria=new Criterion();
        $criteria->criteria_desc=$request->input("criteria");
        $criteria->id_user =session()->get('id');
        $criteria->save();
        return redirect()->route('addCriteria');
    }
    public function AcceptCriterion(){
        if(session()->has('option')=='Reviewer'){
            $statusReviewer= new StatusReviewer();
            $statusReviewer->id_Rev=session()->get('id');
            $statusReviewer->status=1;
            return redirect()->route('home');
        }
    }
    public function viewCriterion(){
        $criterion=Criterion::cursor();
        if(session()->get('option')=='Reviewer'){
            return view('Home.Reviewer.acceptCriteria',['criterion'=>$criterion]);
        }
        else if(session()->get('option')=='Editor_in_Chief'){
            return view('Home.Eic.viewCriteria',['criterion'=>$criterion]);
        }
    }
}
