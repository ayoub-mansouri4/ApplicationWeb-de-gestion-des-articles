<?php

namespace App\Http\Controllers;

use App\Models\AffectArticale;
use App\Models\Articale;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AffectArticaleController extends Controller
{
    public function affect(){
        $Articales=Articale::cursor();
        $reviewers=User::cursor();
        return view('Home.Eic.affecter',['Articales'=>$Articales,'reviewers'=>$reviewers]);
      }
    public function store(Request $request){
               $affectArticale=new AffectArticale();
               $affectArticale->id_user=$request->input('id_rev');
               $affectArticale->id_articale=$request->input('id_arti');
               $affectArticale->save();
               $request->session()->flash('affectArt','Vous avez affecté un articale');
               return redirect()->route('affect');
               
    }
}
