@extends('Home.EIC')
@section('subInfoDiv')
         <?php $var_rev=0;$var_ar=0 ?>
       <form action="{{route('storeAffect')}}" style="text-align: center;margin-top:10px" method="GET">
        @if (session()->has('affectArt'))
        <div class="d-flex justify-content-center">
          <div class="alert alert-success w-50 " role="alert">
              <p>{{session()->get('affectArt')}}</p>
          </div>
        </div>
        @endif
          <h3>Affecter des Articles</h3>
         <div class="d-flex justify-content-center">
        <div class="form-group w-50 "  >
          <label for="Select1">Sélectionner un reviewer</label>
          <select class="form-control " id="Select1" style="margin-bottom: 20px" name="id_rev">
               @foreach ($reviewers as $reviewer)
                @if ($reviewer->option=='Reviewer')
                  <?php $var_rev++?>
                  <option value="{{$reviewer->id}}">{{$reviewer->First_name.' '.$reviewer->Last_name}}</option>
                @endif
                
               @endforeach
           </select>
           <label for="Select2">Sélectionner un Article</label>
           <select class="form-control" id="Select2" style="margin-bottom: 10px"  name="id_arti">
                @foreach ($Articales as $Articale)
                     <?php $var_ar++?>
                    <option value="{{$Articale->id}}">{{$Articale->title}}</option>
                 @endforeach
             </select>
            </div>
          </div>
          <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-secondary btn-lg btn-block w-50 " style="text-align: center"> Affecter</button>
          </div>
       </form>
          @if ($var_ar==0)
          <div class="d-flex justify-content-center p-2">
            <h1  style="text-align: center" class="alert alert-warning  w-50 " role="alert">Aucun article à affecter</h1>
           </div>
          @endif
          @if ($var_rev==0)
          <div class="d-flex justify-content-center p-2">
            <h1  style="text-align: center" class="alert alert-warning  w-50 " role="alert">Aucun reviewer</h1>
           </div>
          @endif
@endsection