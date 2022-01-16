@extends('layout')

@section('content')
<div style="width: 10%">
  <a type="button" href="{{route('home')}}" class="btn btn-secondary btn-block" style="color: white;margin:10px 0px 0px 40px"> <i class="fa fa-arrow-left" style="font-size:40px"></i></a>
</div>  
   <?php $var=0 ?>
    @foreach ($articales as $articale)
        @foreach ($ArticalesRev as $ArticaleRev)
              @if($articale->id==$ArticaleRev->id_articale && $ArticaleRev->id_user)
              <?php $var++?>
              <div style="margin: 10px 0px 0px 0px;display:inline-block">
              <ul >
                <li class="list-group-item " style="background-color:rgb(241, 237, 237)">
                    <a type="button" href="{{route('viewArticale',['Articale'=>$articale->file_name_id])}} " style="color:black">Titre : {{$articale->title}}</a> 
                  </li>
                <li class="list-group-item" style="margin-bottom: 2%">{{$articale->description}}</li>
            </ul> 
          </div>  
            @endif
        @endforeach
    @endforeach
    @if ($var==0)
    <div class="alert alert-warning w-25 " style="margin:10px 10px 0px 400px;text-align:center" role="alert" >
      Aucun article
    </div>   
    @endif
@endsection