@push('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="{{asset('theme/css/home.css')}}" rel="stylesheet">
<link href="{{asset('theme/css/component/preview_landingpage.css')}}" rel="stylesheet">
@endpush

@section('body')
@if(empty($publish))
<x-block class="header-navbar navbar-fixed-top white">

    <ul class="pull-left nav navbar-nav">

        <li class="ml-2 nav-item">
            <a href="{{route('admin.ldp-builder')}}" class="nav-link"> <i class="fa fa-chevron-left"></i> {{__("Trở về")}}</a>
        </li>

    </ul>
    <div id="navbar-mobile" class="navbar-toggleable-sm">

        <div class="float-xs-right">
            <ul class="nav navbar-nav">

{{--                <li class="nav-item mr-1"><button class="btn btn-icon  btn-info round">--}}
{{--                        <i class="icon-screen-smartphone"></i></button> </li>--}}

{{--                <li class="nav-item mr-1"><button class="btn btn-icon  btn-info round"><i class="icon-screen-desktop"></i></button> </li>--}}
                @if(!empty($landingpage))
                    <x-landingpage.publish :landingpage="$landingpage"></x-landingpage.publish>
                @else
                <x-landingpage.publish ></x-landingpage.publish>
                @endif
            </ul>
        </div>
    </div>
</x-block>
@endif

<x-block class="app-content h-100 content  container-fluid">

    <div class="zoom hw-100">
        <div class="screen" style=" width: {{@$content['width']}}px; height: {{@$content['height']}}px;">

{{--            <div class="frame" style="position: absolute; background-image: url({{@$children['background']}}); width: {{@$content['width']}}px; height: {{@$content['height']}}px"></div>--}}
            <div class="@if(empty($publish))wp @endif">
            @if(!empty($content))
                <div class="text-xs-center grid-cols-1" style="height: 100vh; position: relative; ">
                    @php
                        global $font;
                        $font = [];
                    @endphp
                    @foreach($content['pages'] as $children)
                        <div style="background: {{@$children['background']}}; background-image: url({{@$children['background']}}); width: {{@$content['width']}}px; height: {{@$content['height']}}px; background-size: cover">
                            @foreach($children['children'] as $ct)
                                @switch($ct['type'])
                                    @case('text')
                                    @php
                                        if(!in_array($ct['fontFamily'],$font))
                                            $font[] = $ct['fontFamily'];
                                    @endphp
                                    @if(!empty($ct['custom']))
                                        @if(@$ct['custom']['type'] == 'modal')
                                        <a data-src="{{$ct['custom']['url']}} " class="widget">
                                                <x-canva.text :data="$ct"></x-canva.text>
                                            </a>
                                        @else
                                        <a href="{{$ct[' ']['url']}} " target="_blank">
                                            <x-canva.text :data="$ct"></x-canva.text>
                                        </a>
                                        @endif
                                    @else
                                        <x-canva.text :data="$ct"></x-canva.text>
                                    @endif
                                    @break
                                    @case('svg')
                                    @if(!empty($ct['custom']))
                                        @if(@$ct['custom']['type'] == 'modal')
                                            <a data-src="{{$ct['custom']['url']}} " class="widget">
                                                <x-canva.svg :data="$ct" width="{{@$content['width']}}" height="{{@$content['height']}}"></x-canva.svg>
                                            </a>
                                            @else
                                            <a href="{{$ct['custom']['url']}} " target="_blank">
                                                <x-canva.svg :data="$ct"  width="{{@$content['width']}}" height="{{@$content['height']}}"></x-canva.svg>
                                            </a>
                                        @endif
                                    @else
                                        <x-canva.svg :data="$ct" width="{{@$content['width']}}" height="{{@$content['height']}}"></x-canva.svg>
                                    @endif
                                    @break
                                    @case('image')
                                    @if(!empty($ct['custom']))
                                        @if(@$ct['custom']['type'] == 'modal')
                                        <a data-src="{{$ct['custom']['url']}} " class="widget">
                                            <x-canva.image :data="$ct" width="{{@$content['width']}}" height="{{@$content['height']}}"></x-canva.image>
                                        </a>
                                        @else
                                            <a href="{{$ct['custom']['url']}} " target="_blank">
                                                <x-canva.image :data="$ct"></x-canva.image>
                                            </a>
                                        @endif
                                    @else
                                        <x-canva.image :data="$ct"></x-canva.image>
                                    @endif
                                    @break

                                    @default
                                @endswitch
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endif
            </div>
        </div>
    </div>
    @if(!empty($font))
    @foreach($font as $f)
        @push('css')
            <style>
                @import url(//fonts.googleapis.com/css?family={!! str_replace(' ', '+', $f) !!});
            </style>
        @endpush
    @endforeach
    @endif
</x-block>
@push('outer')
    <x-modal  id="widget" class="modal-lg" style="width: {{@$content['width']}}px;">
        <div class="modal-header" style="background: white">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <iframe src="about:blank" loading="lazy" style="height: 60vh; " class="w-100 mt-0" />
    </x-modal>
@endpush
@endsection

<x-layout.simple  class="vertical-layout @if(empty($publish))fixed-navbar @endif" />
