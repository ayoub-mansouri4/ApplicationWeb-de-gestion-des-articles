@extends('layout')
@section('style')
  <link rel="stylesheet" href="/css/login.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<div class="container" style="margin-top:50px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5 style="text-align: center" class="text-warning" >
                Réinitialiser le mot de passe
               </h5>
            <div class="card" style="border-radius: 40px">
                   
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}" >
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse email" required autofocus name="email" value="{{ $email ?? old('email') }}">
                            <label for="inputEmail">Adresse email</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                           @enderror
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

                            <div style="text-align: center">
                                    <button type="submit" class="btn btn-lg   btn-secondary text-uppercase" type="submit" style="border-radius: 40px">
                                            {{ __('réinitialiser le mot de passe') }}
                                    </button>
                            </div>      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="/js/login.js"></script>
@endsection
