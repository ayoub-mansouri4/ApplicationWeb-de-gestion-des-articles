@extends('Home.EIC')
@section('subInfoDiv')
<?php $var=0;?>
  @foreach ($articles as $articale)

        <?php $articaleName= $articale->file_name_id;
        $id_user=$articaleName[0];
        ?>
    <div class=" w-75 p-4">
    @if($articale->status=='0')
      <?php $var+=1;?>
         <h5 >
            <a  style="color: black" type="button" href="{{route('viewArticale',['Articale'=>$articale->file_name_id])}} " >Titre: {{$articale->title}}</a>
            
        </h5>
        <p style="padding:10px;background-color:gray">
           <span style="color: white">Description:</span> 
            {{$articale->description}}
        </p>          
        <div>
            <a type="button" class="btn btn-success" style="color: white" href="{{route('validateFile',['id'=>$articale->id])}}">Valider</a>
            <a type="button" class="btn btn-danger" style="color: white" href="{{route('deletFile',['id'=>$articale->id])}}">annuler</a>
        </div>
    @endif
    </div>
  @endforeach

  @if($var==0)
     <div class="d-flex justify-content-center p-3">
     <h1  style="text-align: center" class="alert alert-warning  w-50 " role="alert">Aucun article</h1>
    </div>
  @endif
@endsection