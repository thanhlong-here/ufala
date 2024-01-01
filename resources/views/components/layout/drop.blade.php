@push('css')
<style>
  body.vertical-layout.vertical-menu.menu-collapsed .navbar-header {
    float: left;
    width: 60px;
  }

  .navbar-light {
    background: none;
    z-index: 0;
  }

  .navbar-light .navbar-header {
    background: #fff;
  }

  .navbar-header .menu {
    position: absolute;
    padding: 14px 0px;
    right: 0;
  }

  .nav-item i {
    margin-right: 1rem;
  }

  .input-group-addon {
    border-radius: 1.5rem;
  }

  .card-round {
    border-radius: .8rem;
    padding: .8rem;
  }

  .overview .card-round {
    min-height: 120px;
    color: white;
  }
</style>
@endpush
@push('script')
<script>
  $("{{session('menu-active','#menu-dashboard')}}").addClass('active');
</script>
@endpush
@section('body')
<x-block class="header-navbar navbar-light navbar-fixed-top">
  <div class="navbar-wrapper">

    <div class="navbar-header">
      <ul class="nav navbar-nav">
        <li class="nav-item mobile-menu hidden-md-up float-xs-left">
          <a class="nav-link nav-menu-main menu-toggle hidden-xs is-active">
            <i class="ft-menu font-large-1"></i></a>
        </li>
        <li class="nav-item">
          <a href="#" class="navbar-brand">
            <image class="logo brand-text" src="{{asset('theme/images/logo/logo.png')}}" />
          </a>

        </li>
        <li class="nav-item hidden-sm-down float-xs-right">

          <a href="#" class="menu menu-toggle hidden-xs is-active">
            <i class="ft-menu font-large-1"></i>
          </a>
        </li>
      </ul>

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

<x-block class="main-menu  menu-light  menu-fixed">
  <div class="main-menu-content menu-accordion">
    <ul id="main-menu-navigation" class="navigation navigation-main">

      <li id="menu-dashboard" class="nav-item">
        <a href="{{route('dropship.dashboard')}}">
          <i class="icon-grid"></i>
          <span class="menu-title">{{ __('Tổng quan')  }}</span>
        </a>
      </li>


      <li id="menu-dropship" class="nav-item">
        <a href="{{route('dropship.index')}}">
          <i class="icon-tag"></i>
          <span class="menu-title">{{ __('Sản phẩm')  }}</span>
        </a>
      </li>
      <li id="menu-report" class="nav-item has-sub">
        <a href="#">
          <i class="icon-graph"></i>
          <span class="menu-title">{{ __('Báo cáo') }}</span>
        </a>

        <ul class="menu-content">
          <li id="menu-camp" class="nav-item">
            <a href="{{route('dropship.report.camp')}}">
              <span class="menu-title">{{ __('Chiến dịch')  }}</span>
            </a>
          </li>
          <li id="menu-order" class="nav-item">
            <a href="{{route('dropship.report.order')}}">

              <span class="menu-title">{{ __('Đơn hàng')  }}</span>
            </a>
          </li>
        </ul>
      </li>
      <li id="menu-transaction" class="nav-item">
        <a href="{{route('dropship.transaction')}}">
          <i class="icon-credit-card"></i>
          <span class="menu-title">{{__('Thanh toán')  }}</span>
        </a>
      </li>
    </ul>
  </div>
</x-block>



<div class="app-content content container-fluid">
  @yield('content')
</div>

@endsection

<x-layout.simple data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar" />