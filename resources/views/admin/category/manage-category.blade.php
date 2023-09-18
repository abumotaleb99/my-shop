@extends('admin.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Categories table</h6>
        @if($message = Session::get('message'))
            <p id="message" class="text-center text-success" >{{ $message }}</p>
        @endif
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach($categories as $category)
              <tr>
                <td>
                  <h6 class="mb-0 ms-3 text-sm">{{ $i++ }}</h6>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $category->name }}</p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $category->description }}</p>
                </td>
                <td class="text-sm">
                  <p class="text-xs text-secondary mb-0">{{ $category->status == 1 ? "Published" : "Unpublished" }}</p>
                </td>
                <td class="text-end">
                  <a href="{{ url('category/edit-category', ['id' => $category->id]) }}" class="text-secondary font-weight-bold text-xs">
                    Edit
                  </a> |
                  <a href="{{ url('category/delete-category', ['id' => $category->id]) }}" class="text-secondary font-weight-bold text-xs">
                    Delete
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection