@extends('Home.EIC')
@section('subInfoDiv')
<div class="container">

    <div class="row">

       <div class="col-md-12 col-sm-12 col-xs-12">
        <form action="{{route('storeCriteria')}}" method="GET" >
          <div class="form-group">
            <label for="criteria">Ecrire les critères de reviewing :</label>
            <textarea  class="form-control" name="criteria" id="criteria" cols="30" rows="10"></textarea>
          </div>
           <div class="form-group">
             <div class="col-md-6">
               <input type="submit" name="submit" value='Enregistrer' class='btn btn-success'>
             </div>
           </div>

         </form>

       </div>
    </div>
  </div>

@endsection