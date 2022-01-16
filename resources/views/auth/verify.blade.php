@extends('layout')
@section('title')
    vérification
@endsection
@section('content')
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"  style="text-align: center;font-weight:bold">
                    <p>Veuillez valider l'adresse mail liée à votre compte.</p>
              </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert"  style="text-align: center;">
                            {{ __('Un nouveau mail vient de vous être envoyé.') }}
                        </div>
                    @endif
                    <p class="text-justify" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        Salut
                        
                    <span style="font-size: 20px">
                        @if (session()->has('name'))
                          {{strtoupper(session()->get('name'))}}
                        @endif
                    </span>
                        
                        ,vous devez valider votre adresse depuis le mail reçu lors de votre inscription .Si vous n'avez pas reçu cet e-mail, vous pouvez cliquer sur le bouton ci-dessous pour le renvoyer.
                    </p>
                   
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}" >
                        @csrf
                        <div style="text-align: center">
                            <button type="submit" class="btn btn btn-warning align-baseline " style="border-radius: 30px;font-weight:bold">{{ __('Envoyer de nouveau le lien de validation ') }}</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
