@extends('layout')
@section('title')
    Home
@endsection

@section('content')

    <div  class="homeDiv" >
        <div style="width:20%; display: inline-block;">
            <ul style="list-style-type: none; margin: 0; padding: 0;">
               @yield('options')
            </ul>
        </div>
    
        <div style="display: inline-block; width:60%;height:700px;margin:0px auto " >
            @yield('InfoDiv')
        </div>
        <form action="{{route('logout')}}" method="POST" style="float: right;margin:10px 10px">
            @csrf
            <button type="submit" class="btn btn-primary">Se deconnecter</button>
        </form>
    </div>
    
    
    <style>
        .homeDiv{
            
            background-image: url('{{asset("img/bc2.jpg")}}');
            height: 100%;
            background-position: center; 
             background-repeat: no-repeat;
             background-size: cover; 
        }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        top: 0;
    }
    
    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }
    
    /* Change the link color on hover */
    li a:hover {
      background-color: #555;
      color: white;
    }
    
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 20%;
      background-color: #f1f1f1;
      height: 100%; /* Full height */
      position: fixed; /* Make it stick, even on scroll */
      overflow: auto; /* Enable scrolling if the sidenav has too much content */
    }
    </style>
@endsection