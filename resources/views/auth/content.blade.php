@push('css')
<link href="{{asset('theme/css/home.css')}}" rel="stylesheet">
@endpush

@section('body')
<div class="container p-2">
  <x-block class="navbar-header container">
    <div class="pull-right">
      <a class="close font-large-2" href="{{ url()->previous() }}"><i class="ft ft-x-circle"></i></a>
    </div>
  </x-block>
  <x-block class="row">
    <div class="p-2 text-xs-center">
          <img class="card-img" style="width:180px" src="{{ $post->qrcode() }}" />
      </div>
    <div class="offset-md-3 col-md-6">
      <div class="card shadow">
        
        <div class="card-body">
          <div class="card-block font-medium-2">
            {!!$post->content!!}

          </div>

        </div>
        <div class="card-footer">

        <fieldset>
							<div class="input-group input-group-lg">
								<span class="input-group-addon"> <i class="icon-link"></i> link :</span>
								<input type="text" class="form-control" disabled value="{{$post->short_link}}" >
							</div>
						</fieldset>
        </div>
      </div>
    </div>

  </x-block>

</div>

@endsection


<x-layout.simple />