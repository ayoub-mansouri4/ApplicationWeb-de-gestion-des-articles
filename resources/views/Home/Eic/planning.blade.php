@extends('Home.EIC')
@section('subInfoDiv')
<form action="{{route('storePlanning')}}" method="GET" style="margin-top:10px ">
    @if (session()->has('Planning'))
    <div class="d-flex justify-content-center">
      <div class="alert alert-success w-50 " role="alert">
          <p>{{session()->get('Planning')}}</p>
      </div>
    </div>
    @endif
    <div  class="d-flex justify-content-center">
      <div class="form-group w-75" >
        <label for="title">Le titre :</label>
        <input class="form-control" type="text" class="form-control" id="title" name="title" >
      </div>
    </div>
    <div  class="d-flex justify-content-center">
    <div class="form-group w-75" >
      <label for="text">Description du palanning :</label>
      <textarea class="form-control" type="text" class="form-control" id="text" name="desc"  rows="4"></textarea>
    </div>
    
</div>
<div  class="d-flex justify-content-center">
  <div class="form-group w-75" >
    @foreach ($docs as $doc)
       @if ($doc->option=='Doctorant')
            <div class="form-group">
              <label for="id_doc">Choisir un doctorant</label>
              <select  class="form-control" id="id_doc" name="id_doc">
                <option value="{{$doc->id}}" selected>{{$doc->First_name.' '.$doc->Last_name}}</option>
              </select>
            </div>
       @endif 
    @endforeach
  </div>  
</div>    
<div  class="d-flex justify-content-center">
  <div class="form-group w-75" >
    <label for="link">Le lien du workshop :</label>
    <input class="form-control" type="url" class="form-control" id="link" name="link" >
  </div>
</div>
<div  class="d-flex justify-content-center">
    <div class="form-group w-75">
      <label for="exampleInput">La date du planning :</label>
      <input type="date" name="DatePlanning" id="" >
      <input type="time" name="TimePlanning" id="">
    </div>
</div>
<div class="d-flex justify-content-center " >
    <button type="submit" class="btn btn-primary btn-lg">Enregistrer</button>
</div>
  </form>
@endsection