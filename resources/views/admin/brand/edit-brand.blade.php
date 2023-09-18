@extends('admin.master')

@section('content')
<div class="row">
  <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
    <div class="card z-index-0">
      <div class="card-header text-center pt-4">
        <h5>Update Brand</h5>
        </div>
        @if($message = Session::get('message'))
          <p id="message" class="text-center text-success" >{{ $message }}</p>
        @endif

        <div class="card-body">
          {!! Form::open(['url' => 'brand/update-brand', 'method' => 'post']) !!}
           <div class="mb-3">
              <input type="text" class="form-control" name="name" value="{{ $brand->name }}" placeholder="Name" >
              <input type="hidden" class="form-control" name="id" value="{{ $brand->id }}" >
              <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : "" }}</span>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="description" placeholder="Description">{{ $brand->description }}</textarea>
              <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : "" }}</span>
            </div>
            <div class="mb-3">
              <select class="form-control" name="status">
                <option {{ $brand->status == 1 ? "selected" : "" }} value="1">Published</option>
                <option {{ $brand->status == 0 ? "selected" : "" }} value="0">Unpublished</option>
              </select>
            </div>    
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update Brand</button>
          </div>
          {!! Form::close() !!}   
        </div>
     </div>
  </div>
</div>
@endsection