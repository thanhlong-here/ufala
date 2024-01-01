@section('content')

<x-block class="container-fluid text-xs-center white bg-home">
    <h2 class="mb-2 "> {{ __("Bạn muốn thiết kế Landing Page ngành hàng nào?") }} </h2>
    <div class="container">
        <div class="offset-xs-3 col-xs-6">
            <ul class="nav nav-navbar tab-categories flex">
                <li class="nav-item active flex-1">
                    <a class="nav-link">
                        <img class="x45" src="{{asset('theme/images/cates/all.png') }}" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="{{asset('theme/images/cates/all.png') }}" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="{{asset('theme/images/cates/all.png') }}" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="{{asset('theme/images/cates/all.png') }}" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="{{asset('theme/images/cates/all.png') }}" />
                        <div>Tất cả </div>

                    </a>
                </li>
                <li class="nav-item flex-1">
                    <a class="nav-link">
                        <img class="x45" src="{{asset('theme/images/cates/all.png') }}" />
                        <div>Tất cả </div>

                    </a>
                </li>

            </ul>
        </div>
    </div>
</x-block>
<x-block class="container-fluid tab-content  bg-fa pt-2 pb-2">
    <div class="tab-pane active" id="tab1">
        <div class="row">
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div><div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>

        </div>
    </div>
    <div class="tab-pane" id="tab2">
        <div class="row">
        <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('theme/images/gallery/slide/5-slider.png')}}" class="w-100" />
            </div>
            

        </div>
    </div>

</x-block>

@endsection


<x-layout.auth  />