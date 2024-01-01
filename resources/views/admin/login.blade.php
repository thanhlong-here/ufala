@section('body')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="flexbox-container">
            <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header no-border">
                        <div class="card-title text-xs-center">
                            <div class="p-1">
                                <a href="{{route('home')}}">
                                    <image class="logo" src="{{asset('theme/images/logo/logo.png')}}" />
                                </a>
                            </div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>{{__('Đăng nhập bằng Email')}}</span></h6>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <x-form class="form-horizontal form-simple" action="{{route('login')}}">
                                <input type="hidden" name="_redirect" value="{{route('admin.index')}}" />
                                <fieldset class="mb-2 form-group position-relative has-icon-left mb-0">
                                    <input type="email" name="email" class="form-control form-control-lg input-lg" placeholder="{{__('Email đăng nhập')}}" required>
                                    <div class="form-control-position">
                                        <i class="ft-mail"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="mb-2 form-group position-relative has-icon-left">
                                    <input type="password" class="form-control form-control-lg input-lg" name="password" placeholder="{{__('Mật khẩu')}}" required>
                                    <div class="form-control-position">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="mb-2 form-group row">
                                    <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                        <fieldset>
                                            <input type="checkbox" id="remember-me" class="chk-remember">
                                            <label for="remember-me">{{__('Ghi nhớ')}}</label>
                                        </fieldset>
                                    </div>

                                </fieldset>
                                <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> {{__('Đăng nhập')}}</button>
                            </x-form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</div>


@endsection

<x-layout.simple class="blank-page" />