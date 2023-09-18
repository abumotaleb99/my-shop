@extends('admin.master')

@section('content')
<div class="row">
  <div class="col-xl-6 col-lg-8 col-md-7 mx-auto">
    <div class="card z-index-0">
      <div class="card-header text-center pt-4">
        <h5>Update Product</h5>
        </div>
        @if($message = Session::get('message'))
          <p id="message" class="text-center text-success" >{{ $message }}</p>
        @endif

        <div class="card-body">
          {!! Form::open(['url' => 'product/update-product', 'method' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'editProductForm']) !!}
           <div class="mb-3">
              <input type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="Name" >
              <input type="hidden" class="form-control" name="id" value="{{ $product->id }}" >
              <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : "" }}</span>
            </div>
            <div class="mb-3">
              <select class="form-control" name="brand_id">
                <option selected>Select Brand</option>
                @foreach($brands as $brand)
                <option  value="{{ $brand->id }}">{{ $brand->name }}</option>
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
              <input type="text" class="form-control" name="price" value="{{ $product->price }}" placeholder="Price" >
              <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : "" }}</span>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" placeholder="Quantity" >
              <span class="text-danger">{{ $errors->has('quantity') ? $errors->first('quantity') : "" }}</span>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="short_description" placeholder="Short Description">{{ $product->short_description }}</textarea>
              <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : "" }}</span>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="long_description" placeholder="Long Description">{{ $product->long_description }}</textarea>
              <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : "" }}</span>
            </div>
            <div class="mb-3">
              <input type="file" class="form-control" name="image" placeholder="Upload Image" accept="image/*" >
              <img src="{{ asset($product->image) }}" class="mt-2" height="70" width="50">
            </div>
            <div class="mb-3">
              <select class="form-control" name="status">
                <option {{ $product->status == 1 ? "selected" : "" }} value="1">Published</option>
                <option {{ $product->status == 0 ? "selected" : "" }}  value="0">Unpublished</option>
              </select>
            </div>    
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update Product</button>
          </div>
          {!! Form::close() !!}   
        </div>
     </div>
  </div>
</div>

<script>
  document.forms['editProductForm'].elements['brand_id'].value = '{{ $product->brand_id}}';
  document.forms['editProductForm'].elements['category_id'].value = '{{ $product->category_id}}';
</script>
@endsection