<div class="navbar-wrapper">
    <div class="navbar-header pt-1">
        <ul class="pull-left nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                    <image class="logo" src="{{asset('theme/images/logo/logo.png')}}" />
                </a>
            </li>

            <li class="nav-item p-1">
                <a class="nav-link" href="{{route('home')}}">
                    {{__("Trang chủ")}}
                </a>
            </li>

            <li class="nav-item p-1">
                <a class="nav-link" href="#">
                    {{__("Mẫu")}}
                </a>
            </li>
            <li class="nav-item p-1">
                <a class="nav-link" href="#">
                    {{__("Giá")}}
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-container content container-fluid pt-1">
        <div id="navbar-mobile" class="row navbar-toggleable-sm">
            <div class="col-md-8">
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="text" class="form-control round" name="search" placeholder="{{__('Tìm kiếm Landing page phù hợp với bạn')}}">
                    <div class="form-control-position">
                        <i class="fa fa-search"></i>
                    </div>

                </fieldset>
            </div>
            <div class="float-xs-right">
                <ul class="nav navbar-nav">
                    <li style="margin-top:.5rem" class="nav-item mr-1">
                        <i class="font-large-1 icon-question"></i>
                    </li>
                    @if (Route::has('login'))
                    <li class="nav-item mr-1">
                        <button  data-src="{{route('login')}}" class="widget btn login-btn">{{__('Đăng nhập')}}</button>
                    </li>
                    <li class="nav-item">
                        <button data-src="{{route('register')}}" class="widget btn btn-primary login-btn">{{__('Đăng ký')}}</button>
                    </li>
                    @push('outer')
                    <x-modal  id="widget">
                        <iframe src="about:blank" loading="lazy" class="w-100" style="height: 333px;" />
                    </x-modal>
                    @endpush

                
                    
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>