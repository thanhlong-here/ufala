


@section('body')
<x-block class="modal-header">
  <button type="button" class="close close-parent">
    <span aria-hidden="true">×</span>
  </button>
  <h4 class="modal-title text-xs-center">
    {{__('Đăng nhập')}}
  </h4>
</x-block>
<x-block class="modal-body">


  <div class="container">
    <div class="content-header text-xs-center">
      <div class="card">
        <div class="card-block">
          <div class="card-body">

            <div class="form-group row one">
              <button type="button" id="btnFacebook" onclick="loginFacebook()" name="login" value="facebook" class="btn btn-facebook block">
                <i class="fa fa-facebook"></i> <span class="ml-1">
                  {{ __('Tiếp tục với Facebook') }} </span>

              </button>
            </div>

            <div class="form-group row one">
              <button type="button" id="btnGoogle" onclick="loginGoogle()" name="login" value="google" class="btn bg-google white  block">
                <i class="fa fa-google-plus"></i><span class="ml-1">
                  {{ __('Tiếp tục với Google') }}
                </span>
              </button>
            </div>


            <div class="form-group row">
              <button type="button" data-backdrop="false" data-toggle="modal" data-target="#modal-email" class="btn btn-primary block">
                <i class="fa fa-envelope-o mr-2"></i> {{ __('Tiếp tục với Email') }}
              </button>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>
</x-block>

@push('outer')
<x-modal class="m-0 w-100 h-100 bg-white" id="modal-email">
  <div class="modal-header">
    <button type="button" data-dismiss="modal" class="pull-left">
      <i class="ft-arrow-left"></i>
    </button>
    <h4 class="modal-title text-xs-center">
      {{__('Tiếp tục với Email')}}
    </h4>
  </div>
  <div class="modal-body">
    <div class="card">
      <div class="card-block">
        <div class="card-body">
          <x-form class="form" action="{{route('checkemail')}}">
            <div class="form-group">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              <input placeholder="Enter input email" wire:model="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">

              <button type="submit" class="btn btn-primary btn-block"> {{ __('Tiếp tục') }} </button>
            </div>
          </x-form>
        </div>
      </div>
    </div>
  </div>
</x-modal>
@endpush

@endsection



@push('script')
<script>
  $('#widget iframe', window.parent.document).height(333);
</script>

<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-analytics.js"></script>

<script src="{{asset('theme/js/firebase.js')}}"></script>
@endpush
<x-layout.simple class="bg-white" />