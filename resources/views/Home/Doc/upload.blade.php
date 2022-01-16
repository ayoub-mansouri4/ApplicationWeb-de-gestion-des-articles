@extends('Home.doctor')
@section('title')
    upload Articale
@endsection
@section('subInfoDiv')

  <div class="container">

    <div class="row">

       <div class="col-md-12 col-sm-12 col-xs-12">

         <!-- Alert message (start) -->
         @if(Session::has('message'))
         <div class="alert {{ Session::get('alert-class') }} center" >
            {{ Session::get('message') }}
         </div>
         @endif 
         <!-- Alert message (end) -->

         <form action="{{route('uploadArticale')}}" enctype='multipart/form-data' method="post" >
           {{csrf_field()}}

           <div class="form-group">
            <label for="title">titre de l'article :</label>
            <input type="text" class="form-control" id="title" name="title" >
            
          </div>
          <div class="form-group">
            <label for="desc">description :</label>
            <textarea  class="form-control" name="description" id="desc" cols="30" rows="10"></textarea>
          </div>
          

           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">L'article :</label>
             <div class="col-md-6 col-sm-6 col-xs-12">

               <input type='file' name='file' class="form-control">

               @if ($errors->has('file'))
                 <span class="errormsg text-danger">{{ $errors->first('file') }}</span>
               @endif
             </div>
           </div>

           <div class="form-group d-flex justify-content-center" >
             <div class="col-md-6" >
               <input type="submit" name="submit" value='Submit' class='btn btn-success btn-block '>
             </div>
           </div>

         </form>

       </div>
    </div>
  </div>

</body>
</html>
@endsection