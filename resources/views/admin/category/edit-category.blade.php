@extends('admin.master')

@section('content')
<div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Update Category</h5>
            </div>        
            <div class="card-body">
              <form role="form text-left" action="{{ url('category/update-category') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Name" >
                  <input type="hidden" class="form-control" name="id" value="{{ $category->id }}" >
                </div>
                <div class="mb-3">
                  <textarea class="form-control" name="description" placeholder="Description">{{ $category->description }}</textarea>
                </div>
                <div class="mb-3">
                    <select class="form-control" name="status">
                        <option {{ $category->status == 1 ? "selected" : "" }} value="1">Published</option> 
                        <option {{ $category->status == 0 ? "selected" : "" }} value="0">Unpublished</option>
                    </select>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update Category</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection