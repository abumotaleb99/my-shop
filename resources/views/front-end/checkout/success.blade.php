@extends("front-end.master") @section('title') My Shop | Success @endsection
@section('body')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center" style="padding-bottom: 70px">
            <h2 class="mb-2" style="color: #7fad39;">Success</h2>
            <div class="pb-2">
                <p style="margin: 0px; padding: 0px">We received your purchase request</p>
                <p style="margin: 0px; padding: 0px">We'll be in touch shortly!</p>
            </div>
            <a href="{{ url('/') }}">
                <button class="site-btn">Home</button>
            </a>
        </div>
    </div>
</div>
@endsection