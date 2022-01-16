@extends('layout')
@section('style')
<link rel="stylesheet" href="/css/register.css"> 
@endsection
@section('content')


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <div class="text-center">
            <h3 class="text-center"><i class="fa fa-lock fa-4x" style="color: rgb(77, 83, 83)"></i></h3>
            <h2 class="text-center">Mot de passe oublié ?</h2>
            <p>Saisissez l'adresse e-mail associé à votre compte . Nous vous enverrons un lien sur cette adresse e-mail pour réinitialiser votre mot de passe.</p>
          </div>
          <form class="form-signin" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Adresse email">
              <label for="inputEmail">Adresse email</label>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
             @enderror
            </div>
            <button class="btn btn-lg  btn-block btn-danger text-uppercase" type="submit" >réinitialiser</button>   
            <hr class="my-4">
            <a href="{{route('login')}}" class="btn  btn-lg btn-block btn-outline-secondary text-uppercase">retour</a> 
            
          </form>
        </div>
      </div>
    </div>
    
  </div>
  
</div>
  
</div>












 
@endsection