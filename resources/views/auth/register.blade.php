@extends('layout')
@section('style')
  <link rel="stylesheet" href="/css/login.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('title')
Inscription 
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
              <h5 class="card-title text-center" style="font-weight:bold;color:#028157;font-family:cursive">
                s'inscrire chez nous
              </h5>
        <form class="form-signin" method="POST" action="{{ route('register') }}">
          @csrf
            <div class="form-content">
                {{-- ------------------------------------------- --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" id="Fname" class="form-control  @error('First_Name') is-invalid @enderror" placeholder=" Votre prénom" name="First_Name" value="{{old('First_Name')}}"/>
                            <label for="Fname">Votre prénom</label>
                            @error('First_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" id="Lname" class="form-control @error('Last_Name') is-invalid @enderror" placeholder=" Votre nom" name="Last_Name" value="{{old('Last_Name')}}"/>
                            <label for="Lname">Votre nom</label>
                            @error('Last_Name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                        </div>
                    </div>
                </div>
            </div>
             {{-- ------------------------------------------- --}}

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse email" required autofocus name="email" value="{{old('email')}}">
                <label for="inputEmail">Adresse email</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
              </div>
              <div class="form-label-group">
                <input type="date" id="date_id" class="form-control @error('Date_Of_birth') is-invalid @enderror"  required autofocus name="Date_Of_birth" value="{{old('Date_Of_birth')}}">
                <label for="date_id">Date de naissance</label>
                @error('Date_Of_birth')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
              </div>

              <div class="form-group" >
                <label for="option" >Choisir le type d'espace :</label>
                <select name="option" id="option" class="form-control" required>
                    <option value="Doctorant">Doctorant</option>
                    <option value="Editor_in_Chief">Editor in Chief</option>
                    <option value="Reviewer">Reviewer</option>
                </select>
  
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" required name="password" autocomplete="new-password">
                <label for="inputPassword">Mot de passe</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
                <span class="spanEye">
                  <i class="fa fa-eye"  id="eye" onclick="toggle()"></i>
                </span>
              </div>

              <div class="form-label-group">
                <input type="password" id="pass_c" class="form-control" placeholder="Confirmer le mot de passe" required name="password_confirmation" autocomplete="new-password">
                <label for="pass_c">Confirmer le mot de passe</label>
                <span class="spanEye">
                  <i class="fa fa-eye"  id="eye2" onclick="toggle2()"></i>
                </span>
              </div>

              
              <button class="btn btn-lg  btn-block btn-danger text-uppercase" type="submit">s'inscrire</button>
              <hr class="my-4">
             <a href="{{route('login')}}" class="btn  btn-lg btn-block btn-outline-secondary text-uppercase">retour</a> 
              {{-- <hr class="my-4"> --}}
              
              
        </form>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
    
</div>
    
@endsection

@section('script')
<script src="/js/login.js"></script>
@endsection
