@extends('layouts.app')

@section('content')
<div class="container">
   <form action="{{url('/p')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">

         <div class="row">
              <h1>Add new Post</h1>
         </div>
         <div class="form-group row">
             <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                 <input id="caption" type="text" class="form-control
                  @error('caption') is-invalid @enderror"  value="{{ old('caption') }}"
                  autocomplete="caption" autofocus name="caption">

                 @error('caption')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
         </div>

         <div class="row">
              <label for="caption" class="col-md-4 col-form-label">Post Image</label>
              <input type="file" name="image" id="image" class="form-control">
              @error('image')
                  <strong style="color:#FD3F3F; font-size:10px;">{{ $message }}</strong>
              @enderror
         </div>

         <div class="row pt-4">
             <button type="submit" class="btn btn-primary">Add New Post</button>
         </div>


        </div>
    </div>



   </form>
</div>
@endsection
