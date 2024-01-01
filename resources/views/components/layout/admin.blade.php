@section('menu-side')

<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
  <li class="nav-item">
    <a href="{{ route('admin.index')  }}">
      <i class="ft-home"></i>
      <span class="menu-title">{{ __('Bảng điều khiển')  }}</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('posts.index')}}">
      <i class="icon-book-open"></i>
      <span class="menu-title">{{ __('Bài viết')  }}</span>
    </a>

  </li>



  <li class="nav-item sub-sale has-sub">
    <a href="#">
      <i class="icon-social-dropbox"></i>
      <span class="menu-title">{{ __('Hệ thống dropship') }}</span>
    </a>

    <ul class="menu-content">
      <li class="nav-item">
        <a href="{{ route('dropships.index')  }}">

          <span class="menu-title">{{ __('Sản phẩm liên kết')  }}</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#">

          <span class="menu-title">{{ __('Đơn hàng từ dropship')  }}</span>
        </a>
      </li>



    </ul>
  </li>

  

  <li class="nav-item">
    <a href="{{ route('users.index',['is'=>'admin'])  }}">
      <i class="icon-ghost"></i>
      <span class="menu-title">{{ __('Tài khoản quản trị') }}</span>
    </a>
  </li>
</ul>
@endsection

@section('menu-top')

@endsection
<x-layout.back />
