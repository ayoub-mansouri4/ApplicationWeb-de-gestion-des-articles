@extends('Home.doctor')
@section('subInfoDiv')
<form method="POST" action="{{route('profile.update',['profile'=>$user->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <div class="form-group col-md-6">
            <label for="Prenom">Prenom</label>
            <input type="text" class="form-control" id="Prenom" name="First_name" value="{{$user->First_name}}">
        </div>
    </div> 
    
    <div class="form-group">
        <div class="form-group col-md-6">
            <label for="nom">nom</label>
            <input type="text" class="form-control" id="nom" name="Last_name" value="{{$user->Last_name}}">
        </div>
    </div>

    <div class="form-group">
        <div class="form-group col-md-6">
        <label for="date">La date de naissance</label>
        <input type="date" class="form-control" id="date" name="date_of_birth" value="{{$user->date_of_birth}}">
       </div>
    </div>
    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$user->email}}">
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputPassword4">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    
@endsection
