@extends('admin.master')

@section('content')
<div class="row">
  <div class="col-xl-6 col-lg-8 col-md-7 mx-auto">
    <div class="card z-index-0">
      <div class="card-header text-center pt-4">
        <h5>Add Product</h5>
        </div>
        @if($message = Session::get('message'))
          <p id="message" class="text-center text-success" >{{ $message }}</p>
        @endif

        <div class="card-body">
          {!! Form::open(['url' => 'product/new-product', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
           <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Name" >
              <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : "" }}</span>
            </div>
            <div class="mb-3">
              <select class="form-control" name="brand_id">
                <option selected>Select Brand</option>
                @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
              </select>
              <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : "" }}</span>
            </div> 
            <div class="mb-3">
              <select class="form-control" name="category_id">
                <option selected>Select Category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
              <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : "" }}</span>
            </div> 
            <div class="mb-3">
              <input type="text" class="form-control" name="price" placeholder="Price" >
              <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : "" }}</span>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="quantity" placeholder="Quantity" >
              <span class="text-danger">{{ $errors->has('quantity') ? $errors->first('quantity') : "" }}</span>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="short_description" placeholder="Short Description"></textarea>
              <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : "" }}</span>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="long_description" placeholder="Long Description"></textarea>
              <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : "" }}</span>
            </div>
            <div class="mb-3">
              <input type="file" class="form-control" name="image" placeholder="Upload Image" accept="image/*" >
              <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : "" }}</span>
            </div>
            <div class="mb-3">
              <select class="form-control" name="status">
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
              </select>
            </div>    
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Save Product</button>
          </div>
          {!! Form::close() !!}   
        </div>
     </div>
  </div>
</div>
@endsection