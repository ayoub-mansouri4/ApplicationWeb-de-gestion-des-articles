
@extends('Home.EIC')



@section('subInfoDiv')
         
        <?php $var=0 ?>
        <ol>
            @foreach ($criterion as $criteria)
            <?php $var++ ?>
            <li style="color:black">
                <h4 >{{$criteria->criteria_desc}}</h4>
            </li>
            @endforeach
        </ol>
        @if($var==0)
        <div class="alert alert-warning w-25 " style="margin:10px 10px 0px 400px;text-align:center" role="alert" >
          Aucun critère 
        </div>   
        @endif

@endsection