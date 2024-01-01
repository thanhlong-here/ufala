<div class="card">
    <div class="card-block">
        <div class="card-body">

            <div class="form-group row one">
                <button type="button" id="btnFacebook" onclick="loginFacebook()" name="login" value="facebook" class="btn btn-facebook block">
                    <i class="fa fa-facebook"></i> <span class="ml-1">
                        {{ __('Continue with Facebook') }} </span>

                </button>
            </div>

            <div class="form-group row one">
                <button type="button" id="btnGoogle" onclick="loginGoogle()" name="login" value="google" class="btn bg-google white  block">
                    <i class="fa fa-google-plus"></i><span class="ml-1">
                        {{ __('Continue with Google') }}
                    </span>
                </button>
            </div>


            <div class="form-group row">
                <button type="button" data-backdrop="false" data-toggle="modal" data-target="#modal-login-email" class="btn btn-primary  block">
                    <i class="fa fa-envelope-o mr-2"></i> {{ __('Continue with Email') }}
                </button>
            </div>

        </div>
    </div>
</div>

@once
@section('firebase')

<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-auth.js"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
    https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-analytics.js"></script>

<script src="{{asset('theme/js/firebase.js')}}" ></script>

@endsection
@endonce
@push('script')
  @yield('firebase')
@endpush