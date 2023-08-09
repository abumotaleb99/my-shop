@extends('admin.master')

@section('content')
<div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Add Category</h5>
            </div>
            @if($message = Session::get('message'))
            <p class="text-center text-success" >{{ $message }}</p>
            @endif
            
            <div class="card-body">
              <form role="form text-left" action="{{ url('category/new-category') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="mb-3">
                  <textarea class="form-control" name="description" placeholder="Description"></textarea>
                </div>
                <div class="mb-3">
                    <select class="form-control" name="status">
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Save Category</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection