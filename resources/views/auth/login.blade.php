@extends('layout')
@section('style')
  <link rel="stylesheet" href="/css/login.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
@endsection
@section('title')
Connectez-vous sur notre site
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center" style="font-weight:bold;color:#028157;font-family:cursive">
                Bienvenue 
            </h5>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" required autofocus name="email" >
                <label for="inputEmail">Adresse email</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required name="password" autocomplete="current-password">
                <label for="inputPassword">Mot de passe</label>
                <span class="spanEye">
                  <i class="fa fa-eye"  id="eye" onclick="toggle()"></i>
                </span>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">Se souvenir de moi</label>
              </div>
              <button class="btn btn-lg  btn-block btn-danger text-uppercase" type="submit" >Se connecter</button>
              <hr class="my-4">
              <div style="text-align: center">
                @if (Route::has('password.request'))
                <a  href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                </a>.
               @endif
                    <a href="{{route('register')}}">S'inscrire sur notre site</a>
              </div>
              
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