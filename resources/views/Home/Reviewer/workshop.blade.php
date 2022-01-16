@extends('Home.reviewer')
@section('subInfoDiv')
   <?php $var=0 ?>
    @foreach ($workshops as $workshop)
    <?php $var++?>
    <div class="card" style="width: 18rem; margin:10px 0px 0px 20px;display:inline-block">
      <div class="card-body">
        <h5 class="card-title">Le titre : {{$workshop->title}}</h5>
        <p class="card-text">La description : {{$workshop->desc}}</p>
        <a href="{{$workshop->link}}" type="button" class="btn btn-info btn-block" target="blank" style="margin-top: 40px ">commencer</a>
      </div>
    </div>
    @endforeach
    @if ($var==0)
    <div class="alert alert-warning w-25 " style="margin:10px 10px 0px 400px;text-align:center" role="alert" >
      Aucun workshop
    </div>   
    @endif
@endsection