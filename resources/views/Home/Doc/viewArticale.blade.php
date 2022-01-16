@extends('layout')
@section('title')
    View articales
@endsection
@section('content')
{{-- <embed src="{{'files/'.$Articale1}}" type="application/pdf">  --}}
<embed src="{{asset('files/'.$Articale)}}" style="width: 100%;height:590px" type="application/pdf"> 

@endsection