@section('body')
<x-block class="container p-2">
  <div class="content-header text-xs-center mb-2">
    <h2>{{$dropship->name}}</h2>
  </div>
  <div class="content-body">

    <div class="offset-md-2 col-md-8">
      <div class="row ">

        <div class="col-md-6">
          <div class="carousel slide w-100" data-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img loading="lazy" class="img-fluid" src="{{asset('theme/images/home/terminal.png')}}">
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img-fluid" src="{{asset('theme/images/home/terminal.png')}}">
              </div>

            </div>

          </div>
        </div>
        <div class="col-md-6  font-medium-2">
          <div class="card shadow">
            <div class="card-block text-justify">
              <p>{!!$dropship->content!!}</p>

            </div>
            <div class="card-block text-xs-center">
              <h2 class="text-bold-700 mb-2"> {{$dropship->price_format}} đ </h2>
              <button data-src="{{route('dropship.cart',$short->short)}}" class="btn btn-primary widget btn-lg block "> {{__('Mua ngay')}} </button>

            </div>
          </div>
        </div>



      </div>
    </div>

  </div>

</x-block>

@endsection
@push('outer')
<x-modal id="widget" class="modal-lg">
  <iframe src="about:blank" loading="lazy" />
</x-modal>
@endpush


<x-layout.simple />