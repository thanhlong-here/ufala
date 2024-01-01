@push('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
    .header-navbar {
        background: linear-gradient(90deg, #33CCCC 0%, #0085FF 100%);
        padding-top: .5rem;
    }
    .header-navbar ul li a.nav-link {
        color: #ffffff;
    }
    .header-navbar .btn-preview,.btn-publish{
        width: 146px;
        height: 40px;

    }
    .header-navbar .btn-publish{
        font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 21px;
        text-align: center;
        color: #333F48;
        background: #FFFFFF;
        border-radius: 40px;
    }
    .btn-header-lp{
        border-color: #ffffff!important;
        background-color: transparent!important;
        color: #FFF!important;
    }

    .header-navbar .btn-preview{
        font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 21px;
        text-align: center;
        color: #ffffff;
    }

    body.vertical-layout.vertical-menu.menu-expanded .main-menu {
        width: 420px;
        background-color: #333F48;
    }

    body.vertical-layout.vertical-menu.menu-expanded .content,
    body.vertical-layout.vertical-menu.menu-expanded .footer,
    body.vertical-layout.vertical-menu.menu-expanded .navbar .navbar-container {
        margin-left: 420px;

    }

    .element {
        width: 120px;
        height: 120px;
        border: .5px solid #999;
        float: left;
    }

    .material {
        width: 100%;
        min-height: 80px;
        border: .5px solid #fff;
        background-color: #4F5459;
        color: #fff;
    }

    .wp {
        width: 100%;
        height: 100%;
        margin-top: 2rem;
    }

    .screen {
        margin: auto;
        width: 360px;

    }

    .screen .frame {
        width: 450px;
        height: 100%;

        background-color: #fff;
        position: fixed;
        top: 0;
        z-index: -1;
    }

    .tool-bar .edit {
        display: none;
    }
    .btn-info.active{
        background: #2DCEE3!important;
        border: none!important;
    }
</style>
@endpush

@section('body')
<x-block class="header-navbar navbar-fixed-top white">
    <ul class="pull-left nav navbar-nav">

        <li class="ml-2 nav-item">
            <a href="{{route('home')}}" class="nav-link"> <i class="fa fa-chevron-left"></i> {{__("Trở về trang chủ")}}</a>
        </li>
    </ul>
    <div id="navbar-mobile" class="navbar-toggleable-sm">

        <div class="float-xs-right">
            <ul class="nav navbar-nav">
                @guest
                <li class="nav-item mr-2">
                    <p class="nav-link"><i>
                Để lưu Landing Page của bạn, hãy
                <a data-src="{{route('register')}}" class="text-bold-600 widget"><u>ĐĂNG KÝ</u></a> hoặc <a data-src="{{route('login')}}"   class="text-bold-600 widget" ><u> ĐĂNG NHẬP </u> </a></i>
                </p>
                @endguest
                <li class="nav-item mr-1 ">
                    <a href="@if(!empty($landingpage->landingpage_id)){{route('landingpage.work',['path'=>$landingpage->landingpage_id,'dv'=>'m'])}}
                    @else
                        {{route('landingpage.work',['path'=>0 ,'dv'=>'m'])}}
                    @endif" class="btn btn-icon  btn-info btn-header-lp round @if(Request::route('dv') == 'm') active @endif" id="mobile-response">
                    <i class="icon-screen-smartphone"></i>
                    </a> </li>

                <li class="nav-item mr-1">
                    <a href="@if(!empty($landingpage->landingpage_id)){{route('landingpage.work',['path'=>$landingpage->landingpage_id,'dv'=>'d'])}}
                    @else
                    {{route('landingpage.work',['path'=>0, 'dv'=>'d'])}}
                    @endif" class="btn btn-icon  btn-info btn-header-lp round @if(Request::route('dv') == 'd') active @endif" id="destop-response">
                    <i class="icon-screen-desktop"></i>
                    </a> </li>
                    @if((!empty($landingpage->landingpage_id)))
                        <li class="nav-item mr-1"><button class="btn round btn-info btn-header-lp btn-preview" onclick="updateLandinpageToPreview(); ">{{__('Xem trước')}}</button></li>
                        <li class="nav-item mr-1 hidden">
                            <a href="{{route('builder.preview',['id'=>$landingpage->landingpage_id,'device'=>@Request::route('dv') ?? 'm'])}}" target="_blank" class="btn round btn-info btn-header-lp" id="bt-ldp-rv">{{__('Xem trước')}}</a></li>
                    @else
                        <li class="nav-item mr-1"><button class="btn round btn-info btn-header-lp btn-preview" onclick="updateLandinpageToPreview() ;">{{__('Xem trước')}}</button></li>
                        <li class="nav-item mr-1 hidden"><a href="{{route('builder.preview',['device'=>@Request::route('dv') ?? 'm'])}}" target="_blank" class="btn round btn-info btn-header-lp" id="bt-ldp-rv">{{__('Xem trước')}}</a></li>
                    @endif
                @auth
                    {{--                    The user is authenticated...--}}
                        <x-landingpage.publish :landingpage="$landingpage"></x-landingpage.publish>
                @endauth
                @guest
{{--                    The user is not authenticated...--}}
                    <li class="nav-item mr-1">
                        <button data-src="{{route('login')}}" class="btn  btn-second round widget btn login-btn btn-publish" >{{__('Xuất bản')}}</button>
                    </li>
                    @push('outer')
                        <x-modal  id="widget">
                            <iframe src="about:blank" style='height:40rem;border-radius:12px'  loading="lazy" class="w-100" />
                        </x-modal>
                    @endpush
                @endguest
            </ul>
            <button data-src="{{route('lp.widget.links')}}" class="widget btn btn-primary login-btn show-frame hidden"></button>
        </div>
    </div>
</x-block>
<div class="hidden" id="csrf_token" data-token="{{csrf_token()}}" data-id="{{@$landingpage->landingpage_id}}" data-device="{{@Request::route('dv') ?? 'm'}}">
    @if(Request::route('dv') == 'd')
        <input type="text" id="content" value="{{json_encode(@$landingpage->content_desktop)}}">
    @else
        <input type="text" id="content" value="{{json_encode(@$landingpage->content)}}">
    @endif
</div>

<div id="root">

</div>


<script src="{{ asset('js/landingpage/index.js') }}"></script>
@endsection

@push('script')
<script src="{{asset('theme/js/app-menu.min.js')}}"></script>
<script src="{{asset('theme/js/app.js')}}"></script>

@endpush

@push('outer')
<x-modal style="background:#F5F7FA" class="modal-lg mt-0" id="widget">
    <iframe src="about:blank" loading="lazy" />
</x-modal>

@endpush
<x-landingpage.linksetup></x-landingpage.linksetup>
<x-loading.loading />
<x-layout.simple data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar menu-expanded " />
