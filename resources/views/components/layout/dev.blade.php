@section('menu')
<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

  <li class="nav-item">
    <a href="{{ route('dev.index')  }}">
      <i class="icon-graph"></i>
      <span class="menu-title">{{ __('Dashboard')  }}</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{route('tables.index')}}">
      <i class="icon-grid"></i>
      <span class="menu-title">{{ __('Bảng dữ liệu')  }}</span>
    </a>
  </li>

</ul>

@endsection
<x-layout.back />