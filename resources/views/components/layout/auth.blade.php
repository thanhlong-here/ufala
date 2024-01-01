@php
session(['menuOpenSub' => request('open', '')]);
@endphp
@push('css')
    <style>
        .editProfile {
            display: flex;
            font-size: 13px;
        }

        .inputEdit {
            width: 300px;
            height: 30px;
            border: 1px solid rgb(0 0 0 / 22%);
            border-radius: 5px;
        }
        .formEdit{
            display: flex
        }
    </style>
@endpush
@section('body')
    <x-block class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light navbar-border">

        <div class="navbar-wrapper">
            <div class="navbar-header pt-1">
                <ul class="pull-left nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <image class="logo" src="{{ asset('theme/images/logo/logo.png') }}" />
                        </a>
                    </li>



                </ul>
            </div>
            <div class="navbar-container content container-fluid pt-1">
                <div id="navbar-mobile" class="row navbar-toggleable-sm">
                    <div class="col-md-8">
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" class="form-control round" name="search"
                                placeholder="{{ __('Tìm kiếm Landing page phù hợp với bạn') }}">
                            <div class="form-control-position">
                                <i class="fa fa-search"></i>
                            </div>

                        </fieldset>
                    </div>
                    <div class="float-xs-right">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="/landingpage-builder" class="btn btn-primary white round"> +
                                    {{ __('Tạo Landing Page') }} </a>
                            </li>
                            <li style="margin-top: .5rem;" class="dropdown dropdown-user nav-item mr-1">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle dropdown-user-link"><span
                                        class="avatar avatar-online">

                                        <img src="{{ asset('theme/images/portrait/small/avatar-s-1.png') }}"></span></a>
                                <div class="dropdown-menu dropdown-menu-right"><a id="edit-item" data-item-id="1" href="#"
                                        class="dropdown-item"><i class="ft-user"></i> Edit Profile
                                    </a><a href="#" class="dropdown-item"><i class="ft-mail"></i> My Inbox</a><a
                                        href="#" class="dropdown-item"><i class="ft-check-square"></i> Task</a><a href="#"
                                        class="dropdown-item"><i class="ft-comment-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a href="{{ route('logout') }}"
                                        class="dropdown-item"><i class="ft-power"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </x-block>
    <x-block class="main-menu menu-fixed menu-light">
        <div class="main-menu-content pt-2 menu-accordion">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

                <li class="nav-item">
                    <a href="{{ route('home') }}">
                        <i class="ft ft-home"></i>
                        <span class="menu-title">{{ __('Trang chủ') }}</span>
                    </a>
                </li>

                <li class="nav-item sub-post has-sub ">
                    <a href="#">
                        <i class="ft ft-layout"></i>
                        <span class="menu-title">{{ __('Langding Page') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item">
                            <a href="/landingpage-builder">
                                <span class="menu-title">{{ __('Thiết kế') }}</span>
                            </a>
                        </li>
                        <li class="nav-item @if (Route::currentRouteName() == 'landingpage.report') active @endif">
                            <a href="#">
                                <span class="menu-title">{{ __('Báo cáo') }}</span>
                            </a>
                        </li>
                        <li class="nav-item @if (Route::currentRouteName() == 'landingpage.recycle') active @endif">
                            <a href="#">
                                <span class="menu-title">{{ __('Thùng rác') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class="ft ft-comment-square"></i>
                        <span class="menu-title">{{ __('Chat bot') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="ft-video"></i>
                        <span class="menu-title">{{ __('Livestream') }}</span>
                    </a>
                </li>
                <li class="nav-item sub-dropship has-sub">
                    <a href="#">
                        <i class="ft-box"></i>
                        <span class="menu-title">{{ __('Dropshiping') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item">
                            <a href="{{ route('dropship.index') }}">
                                <span class="menu-title">{{ __('Sản phẩm') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="menu-title">{{ __('Báo cáo chi tiết đơn hàng') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="menu-title">{{ __('Báo cáo hiệu quả') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="menu-title">{{ __('Lịch sử thanh toán') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</x-block>
<x-block class="main-menu menu-fixed menu-light">
    <div class="main-menu-content pt-2 menu-accordion">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

            <li class="nav-item">
                <a href="{{ route('home')  }}">
                    <i class="ft ft-home"></i>
                    <span class="menu-title">{{ __('Trang chủ')  }}</span>
                </a>
            </li>

            <li class="nav-item sub-post has-sub ">
                <a href="#">
                    <i class="ft ft-layout"></i>
                    <span class="menu-title">{{ __('Langding Page') }}</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item">
                        <a href="/landingpage-builder">
                            <span class="menu-title">{{ __('Thiết kế') }}</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Route::currentRouteName() == 'landingpage.report') active @endif">
                        <a href="#">
                            <span class="menu-title">{{ __('Báo cáo') }}</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Route::currentRouteName() == 'landingpage.recycle') active @endif">
                        <a href="#">
                            <span class="menu-title">{{ __('Thùng rác') }}</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="ft ft-comment-square"></i>
                    <span class="menu-title">{{ __('Chat bot')  }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="ft-video"></i>
                    <span class="menu-title">{{ __('Livestream')  }}</span>
                </a>
            </li>
            <li class="nav-item sub-dropship has-sub">
                <a href="#">
                    <i class="ft-box"></i>
                    <span class="menu-title">{{ __('Dropshiping')  }}</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item">
                        <a href="{{route('dropship.index')}}">
                            <span class="menu-title">{{ __('Sản phẩm')  }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span class="menu-title">{{ __('Báo cáo chi tiết đơn hàng')  }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span class="menu-title">{{ __('Báo cáo hiệu quả')  }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <span class="menu-title">{{ __('Lịch sử thanh toán')  }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</x-block>


    <div class="app-content content container-fluid">
        @yield('content')
    </div>

@endsection
@push('script')
    @if (session('menuOpenSub'))
        $('.sub-{{ session('menuOpenSub') }}').addClass('open');
    @endif
    <script>
        $(document).ready(function() {
            $(document).on('click', "#edit-item", function() {
                $(this).addClass(
                    'edit-item-trigger-clicked'
                ); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

                var options = {
                    'backdrop': 'static'
                };
                $('#edit-modal').modal(options)
            })

            // on modal show
            $('#edit-modal').on('show.bs.modal', function() {
                var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
                var row = el.closest(".data-row");

                // get the data
                var id = el.data('item-id');
                var name = row.children(".name").text();
                var description = row.children(".description").text();

                // fill the data in the input fields
                $("#modal-input-id").val(id);
                $("#modal-input-name").val(name);
                $("#modal-input-description").val(description);

            })

            // on modal hide
            $('#edit-modal').on('hide.bs.modal', function() {
                $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
                $("#edit-form").trigger("reset");
            })
        })
    </script>
@endpush
@push('outer')
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="edit-modal-label">Tài khoản của bạn</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body" id="attachment-body-content">
                    <div class="editProfile">
                        <div><img src="{{ asset('theme/images/Ellipse 49.png') }}"></div>
                        <div>
                            <span><a>Tải ảnh mới lên</a></span>
                            <span style="margin:auto 10px">.</span>
                            <span><a>Gở bỏ ảnh</a></span>
                            <p>Please help us, I recognized you</p>
                        </div>
                    </div>
                    <div>
                        <form onsubmit="submit" class="formEdit">
                            <div>
                                <p >Tên</p>
                                <input type='text' class="inputEdit" />
                                <p >email</p>
                                <input type='email' class="inputEdit" />
                            </div>
                            <div>
                                <p >Số điện thoại</p>
                                <input type='number' class="inputEdit" />
                                <p >Gói dịch vụ</p>
                                <input type='text' class="inputEdit" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endpush
@push('outer')
<x-modal id="widget">

    <iframe src="about:blank" loading="lazy" class="w-100" />
</x-modal>
@endpush
<x-layout.simple data-open="click" data-menu="vertical-menu" data-col="2-columns"
    class="vertical-layout vertical-menu 2-columns fixed-navbar" />
