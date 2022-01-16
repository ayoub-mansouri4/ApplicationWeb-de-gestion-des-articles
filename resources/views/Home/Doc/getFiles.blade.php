@extends('layout')
@section('title')
    View articales
@endsection
@section('content')
     

  
<div style="width: 10%">
  <a type="button" href="{{route('home')}}" class="btn btn-secondary btn-block" style="color: white;margin:10px 0px 0px 30px"> <i class="fa fa-arrow-left" style="font-size:40px"></i></a>
</div>  
    <?php $var=0;?>
   @foreach ($files as $file)
     <?php $FileName= $file->file_name_id;
           $id_user=$FileName[0];
           $var++;
      ?>
    <div class=" w-25 p-4" style="display: inline-block">
    @if ($id_user==session()->get('id'))
        
    <ul class="list-group">
        <li class="list-group-item " style="background-color:rgb(241, 237, 237)">
          @if($file->status=='0')
          <p style="color:rgb(247, 62, 6)">Non-valide</p> 
       @endif
        @if($file->status=='1')
        <p style="color:rgb(48, 112, 48)">Valide</p>
        @endif
            <a type="button" href="{{route('viewArticale',['Articale'=>$file->file_name_id])}} " style="color:black">Titre : {{$file->title}}</a>
           
          </li>
        <li class="list-group-item" style="margin-bottom: 2%">{{$file->description}}</li>
    </ul>
    

            {{-- <embed src="{{'files/'.$file->file_name_id}}" type="application/pdf">  --}}

    @endif

  </div>

  
       
   @endforeach
   @if ($var==0)
   <div class="alert alert-warning w-25 " style="margin:10px 10px 0px 400px;text-align:center" role="alert" >
    Aucun article 
  </div>
   @endif
    
@endsection