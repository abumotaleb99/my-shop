@extends('admin.master')

@section('content')
<div class="row">
  <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
    <div class="card z-index-0">
      <div class="card-header text-center pt-4">
        <h5>Add Brand</h5>
        </div>
        @if($message = Session::get('message'))
          <p id="message" class="text-center text-success" >{{ $message }}</p>
        @endif

        <div class="card-body">
          {!! Form::open(['url' => 'brand/new-brand', 'method' => 'post']) !!}
           <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Name" >
              <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : "" }}</span>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="description" placeholder="Description"></textarea>
              <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : "" }}</span>
            </div>
            <div class="mb-3">
              <select class="form-control" name="status">
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
              </select>
            </div>    
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Save Brand</button>
          </div>
          {!! Form::close() !!}   
        </div>
     </div>
  </div>
</div>
@endsection