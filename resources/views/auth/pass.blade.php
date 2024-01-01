@auth 
<script>
parent.location.reload();
</script>
@endauth 

@section('body')
<x-block class="modal-header">
  <button type="button" class="close">
    <span aria-hidden="true">×</span>
  </button>
  <h4 class="modal-title text-xs-center">
    {{ __('Đăng nhập với email') }}
  </h4>
</x-block>
<x-block class="modal-body">
  <div class="container">
    <div class="content-header">
      <div class="card">
        <div class="card-block">
          <div class="card-body">
            <x-form action="{{route('login')}}">
            
              <fieldset class="form-group position-relative has-icon-left">
                <input type="email" required class="form-control round" name="email" value="{{ request('email')}}" placeholder="email">
                <div class="form-control-position">
                  <a href="{{route('login')}}"><i class="ft-arrow-left info"></i></a>
                </div>
                @error('email')

                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </fieldset>
              

              <div class="form-group">
                <label for="password"> {{__('Mật khẩu')}} </label>
                <input class="form-control" name="password" type="password" required />
              </div>



              <div class="form-group">
                <button type="submit" class="btn btn-primary block">
                  {{ __('Gửi thông tin') }}
                </button>
              </div>
            </x-form>
          </div>
        </div>
      </div>

    </div>

  </div>
  </div>
</x-block>


@endsection
@push('script')
<script>
  $('.modal-header .close').click(function() {
    window.parent.$('#widget-login').modal('hide');
  });
  window.parent.$('#widget-login iframe').height(400);
</script>
@endpush

<x-layout.simple class="bg-white" />