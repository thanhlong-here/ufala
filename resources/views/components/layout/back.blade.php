@php
$openMenu = session('menuOpenSub');
@endphp

@section('body')
<x-block tag="nav" class="header-navbar navbar-fixed-top navbar-light">
  <div class="navbar-wrapper">
    <div class="navbar-header">

      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">
            <image class="logo" src="{{asset('theme/images/logo/logo.png')}}" />
          </a>
        </li>

        <li class="nav-item hidden-sm-down float-xs-right">
          <a href="#" class="nav-link fixed nav-menu-main menu-toggle hidden-xs">
            <i class="ft-menu font-large-1"></i>
          </a>
        </li>

      </ul>
      <div class="navbar-container content container-fluid pt-1">
        <div id="navbar-mobile" class="navbar-toggleable-sm">
          @yield('menu-top')
        </div>
      </div>
    </div>

  </div>
  <div class="fixed top-0 right-0 px-6 py-4 sm:block">

    <ul class="nav navbar-nav float-xs-right">

      <li class="nav-item ">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="icon-power"></i>
          <span class="menu-title"> {{ __('Đăng xuất')  }}</span>
        </a>
      </li>

    </ul>
  </div>

</x-block>
<x-block class="main-menu menu-fixed menu-light">
  <div class="main-menu-content menu-accordion">
    @yield('menu-side')
  </div>
</x-block>


<div class="app-content content container-fluid">
  @yield('content')
</div>

@endsection

@push('script')

@if($openMenu)
<script>
  $('.sub-{{$openMenu}}').addClass('open');
</script>
@endif

@endpush

<x-layout.simple data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar" />