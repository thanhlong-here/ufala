
@section('body')
<x-block class="modal-header">
  <button type="button" class="close close-parent">
    <span aria-hidden="true">×</span>
  </button>
  <h4 class="modal-title text-xs-center">
    {{ __('Đăng ký') }}
  </h4>
</x-block>
<x-block class="modal-body">
  <div class="container">
    <div class="content-header">
      <div class="card">
        <div class="card-block">
          <div class="card-body">
            <x-form action="{{route('register')}}">

              <fieldset class="form-group position-relative has-icon-left">
                <input type="email" required class="form-control round" name="email" value="{{ request('email')}}" placeholder="email">
                <div class="form-control-position">
                  <a href="{{route('login')}}"><i class="ft-arrow-left info"></i></a>
                </div>

              </fieldset>
              <div class="form-group">
                <label for="name"> {{__('Họ tên')}} </label>
                <input class="form-control" name="name" type="text" required />
                @error('name')

                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="password"> {{__('Mật khẩu')}} </label>
                <input class="form-control" name="password" type="password" required />
              </div>

              <div class="form-group">
                <label for="password"> {{__('Xác nhận mật khẩu')}} </label>
                <input class="form-control" name="password_confirmation" required type="password" />
                @error('password_confirmation')

                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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

@endsectionp
@push('script')
<script>

$('#widget iframe', window.parent.document).height(564);
</script>
@endpush
<x-layout.simple class="bg-white" />