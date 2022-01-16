<?php

namespace App\Http\Controllers;

use App\Models\AffectArticale;
use App\Models\Articale;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class FileController extends Controller
{
    public function index(){
        return view('Home.Doc.upload');
     }
    
     
     public function uploadFile(Request $request){
        //$lastFile= Articale::where('id',session()->get('id'));
        $files=Articale::cursor();
        $lastID=0;
        foreach($files as $file) {
            $lastID= $file->id;
        }
        $lastID+=1;
        // Validation
        $request->validate([
          'file' => 'required|mimes:pdf|max:2048'
        ]); 
        if($request->file('file')) {
           $file = $request->file('file');
           $filename = session()->get('id').'_'.$lastID.'_'.$file->getClientOriginalName();

            $newfile= new Articale();
            $newfile->title=$request->input("title");
            $newfile->description=$request->input("description");
            $newfile->id_user=session()->get('id');
            $newfile->status=false;
            $newfile->file_name_id=$filename;
            $newfile->save();

           // File upload location
           $location = 'files';
  
           // Upload file
           $file->move($location,$filename);
  
           Session::flash('message','Upload Successfully.');
           Session::flash('alert-class', 'alert-success');
        }else{
           Session::flash('message','File not uploaded.');
           Session::flash('alert-class', 'alert-danger');
        }
        return redirect()->route('uploadArticale');
     }
     public function getFile(Request $request){
              $files=Articale::cursor();
              if($files==null) session(['articalesNotFound','Aucun articales']);
              
              if(session()->get('option')=='Editor_in_Chief')
                        return view('Home.Eic.viewArticles',['articles'=>$files]);
               elseif(session()->get('option')=='Doctorant')
                        return view('Home.Doc.getFiles',['files'=>$files]);
               elseif(session()->get('option')=='Reviewer'){
                  // $ArticalesRev=AffectArticale::where('id_user',session()->get('id'));
                  $ArticalesRev=AffectArticale::cursor();
                  return view('Home.Reviewer.showArticales',['articales'=>$files,'ArticalesRev'=>$ArticalesRev]);
               }

                       


   }

    
    public function validateFile($id)
    {
      $file=Articale::find($id);
      $file->status=true;
      $file->save();
      return redirect()->route('getFiles');
    }
   public function  deletFile($id){
      $file=Articale::findOrfail($id);
      $file->delete();
      return redirect()->route('getFiles');

   }
}
