@extends('layout')

@section('title')
accueil
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('index')}}" >Gestion des conférences</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link"  href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item" style="margin-left:5px">
          <a class="nav-link " href="#com_sientifiques">les Comités scientifiques</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#nouveautes" id="navbarDropdown" >
           Les nouveautés
          </a>
        </li>
        <li class="nav-item" style="margin-left:5px">
          <a class="nav-link " href="#planning">
            <i class="fa fa-calendar"></i></a>
        </li>
        
      </ul>
      
    </div>
    <ul class="navbar-nav mr-auto" style="float: right;margin-left: 15px" >
      <li class="nav-item" >
     
        <a href="{{route('login')}}"><i class="fa fa-user-circle" style="font-size:30px;color:gray" ></i></a>
      
      </li>
    </ul>
  </nav>
    

    <section id="nouveautes" style="margin:100px 0px 100px 0px;" >
      
      
      
      <?php $var=0 ?>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach ($articales as $articale)
          @if ($var==0)
            <div class="carousel-item active">
                  <h3 style="text-align: center">{{$articale->title}}</h3> 
                  <p style="text-align: center;font-weight:bold">{{$articale->description}}</p>
                  <?php $var++?>  
            </div>
            @endif
            @if ($var!=0)
              <div class="carousel-item">                
                    <h3 style="text-align: center">{{$articale->title}}</h3> 
                    <p style="text-align: center;font-weight:bold">{{$articale->description}}</p>
              </div>
            @endif
          @endforeach
          

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
      </div>
    </section>


    <section id="com_sientifiques" style="text-align:center" >
      <h1 class="display-6" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Les comités scientifiques</h1>
     <hr width="40%">
      @foreach ($doctors as $doctor)
           @if ($doctor->option=='Doctorant')
               <p style="font-weight:bold">{{'Dr(e) '.$doctor->First_name.' '.$doctor->Last_name}}</p>
           @endif
      @endforeach
    </section>


    <section id="planning" style="margin:150px 0px" >
      <div style="text-align:center">
         <h1 class="display-6" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Les dates importantes</h1>
        <hr width="40%" style="margin-bottom:50px">
      </div>
      @foreach ($plannings as $planning)
            <div  class="planning" style="margin-bottom:10px">
                
                <h5 class="d-flex justify-content-center" >Le titre :{{$planning->title}}</h5>
                <p class="d-flex justify-content-center" style="text-align: center" > {{$planning->desc}}</p>
                <p class="d-flex justify-content-center"><span style="font-weight:bold">La date : </span> {{$planning->Date_palnning.' '.$planning->time_palnning}}</p>
                <hr width="20%" >

            </div>
            
      @endforeach
    </section>

    <style>
      .planning{
        background-color: #dfdfdf;
        width:25%;
        height:200px;
        border-radius:20%;
        margin: 0px auto;
        position: relative;
      }
      .nouveautes {
        width: 20%;
        height: 200px;
        position: relative;
        
        animation-name: example;
        animation-duration: 18s;
        animation-iteration-count: infinite;
      }
      
      @keyframes example {
          0%   { left:0px; top:0px;}
       100%  { left:100%; top:0px;}
      }

      body{
        /* height: 950px; */
        width: 100%;
        background-image: url('{{asset("img/bc1.jpg")}}');
        background-position: center; 
        background-repeat: no-repeat;
        background-size: cover; 
      }
      </style>
@endsection