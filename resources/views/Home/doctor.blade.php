@extends('home')

@section('options')
     @if (session()->has('Fname') && session()->has('Lname') && session()->has('id'))
     <?php 
        $fname=session()->get('Fname');
        $lname=session()->get('Lname');
        $idU=session()->get('id');
     ?>
    <p style="margin-left:5%;margin-top:5px;text-align:center">{{$fname.' '.$lname}}</p>
    <p><i class="fa fa-user" style="font-size:100px;margin-left:100px"></i></p>
    <li><a href="{{route('profile.edit',['profile'=>$idU])}}">Mon profile</a></li>
    <li><a href="{{route('indexArticale')}}">Soumissionner un article</a></li>
    <li><a href="{{route('getFiles')}}">Lire vos articles</a></li>
    <li><a href="{{route('workshops')}}">Visualiser vos workshops</a></li>
    @endif
@endsection
@section('InfoDiv')
    @yield('subInfoDiv')
@endsection

