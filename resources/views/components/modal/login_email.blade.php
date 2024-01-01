<x-modal class="modal-sm" id="modal-login-email">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" onClick="$('#modal-login-email').modal('toggle')">
        <span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title text-xs-center">
        <i class="fa fa-envelope-o mr-1"></i> {{ __('Sign in with email') }}
      </h4>
    </div>
    <div class="modal-body">

      <div class="card">
        <div class="card-block">
          <div class="card-body">
            <div class="form-group row">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                  <input placeholder="Enter input email"
                      wire:model="email"
                      type="email"
                      class="form-control"
                      name="email" value="{{ old('email') }}" required  autofocus>
              @if (Route::has('password.request'))
                  <a class="btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif
          </div>

          <x-form>
            <div class="form-group row text-xs-center">
              <button class="btn btn-block round text-bold-600 dropdown-toggle">
                <i class="ft ft-user mr-1"></i>{{$email}}
              </button>
            </div>
            <div class="form-group row">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              <input placeholder="enter input password" wire:model="password" type="password" class="form-control" name="password" required autofocus>
              <label class="form-check-label pull-left" for="remember">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Remember Me') }}
              </label>
            </div>
            <div class="form-group row">
              <button type="submit" class="btn btn-primary btn-block">
                {{ Theme::title('login') }}
              </button>
            </div>
          </x-form>

          </div>
        </div>
      </div>
    </div>

  </div>
</x-modal>