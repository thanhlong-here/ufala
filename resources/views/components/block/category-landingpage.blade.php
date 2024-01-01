@push('css')
    <style>
        .imgHover{
            height: 300px;
            overflow-y: hidden;
        }
        .owl-nav{
            font-size: 40px;
            position: absolute;
            top: 9%;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .owl-nav button{
           width: 50px;
        }
        .owl-nav button:hover{
           background-color: #26C0C3!important;
        }
        .owl-nav button:hover span{
           color: white!important;
        }
    </style>
@endpush
<x-block class="container-fluid text-xs-center white bg-home">
    <h2 class="mb-2 "> {{ __("Bạn muốn thiết kế Landing Page ngành hàng nào?") }} </h2>
    <div class="container">
        <div class="offset-xs-3 col-xs-6">
            <ul class="nav nav-navbar tab-categories flex">
                @foreach ($categories['data'] as $key => $cate)
                    <li class="nav-item flex-1 arrowTab @if($key == 0) active @endif">
                        <a class="nav-link" href="#tab{{$key+1}}">
                            <img class="x45" src="{{ asset('theme/images/cates/fashion.png') }}" />
                            <div>@if(!empty($cate['name'])){{$cate['name']}}@else Tất cả @endif</div>
                        </a>
                    </li>
                    
                @endforeach
            </ul>
        </div>
    </div>
</x-block>

<x-block class="tab-content  bg-fa pt-2 pb-2 landingpage-block">
    @foreach ( $categories['data'] as $key => $data)
        <div class="tab-pane tab-list @if($key == 0) active @endif" id="tab{{$key+1}}">
            <div class="owl-carousel owl-theme">
                @php
                    $landingpage = [];
                    if(!empty($data['landingpages']))
                        $landingpage = $data['landingpages'];
                    elseif(!empty($data['data']))
                        $landingpage = $data['data'];
                @endphp
                @foreach ($landingpage as $item)
                <div class="tabHover">
                    <div class="imgHover">
                        @if(!empty($item['medias']))
                        <img loading="lazy" src=" {{ asset("public/avatar/".$item['medias'][0]['name']) }}"
                            class="w-100" />
                        @endif
                    </div>
                    <div class="buttonHover">
                        <div class="inputHover">
                            <a class="inputButton btn" href="{{route('template.preview',['prefix'=>'template', 'id'=>$item['id'],'dv'=>Request::route('dv') ?? 'm'])}}" target="_blank">Xem trước</a>
                            <br>
                            <a class="inputButton btn" href="{{route('landingpage.work',['prefix'=>'template', 'path'=>$item['id']])}}" target="_blank">Sử dụng luôn</a>
                        </div>
                       
                    </div>
                </div> 
                @endforeach
            </div>
        </div>  
    @endforeach

</x-block>
@push('script')
@if(Agent::isDesktop())
 <script type="text/javascript">
 $(document).ready(function(){
    $('.owl-carousel').owlCarousel(
        {
            'items': 5,
            'nav': true,
            'dots': false,
            'autoplay': true,
            'loop': true,
            'navText' : ["<span class='fa fa-chevron-right'></span>","<span class='fa fa-chevron-left'></span>"]
        }
    );
 });
</script>
@else 
<script type="text/javascript">
    $(document).ready(function(){
       $('.owl-carousel').owlCarousel(
           {
               'items': 1,
               'nav': true,
               'dots': false,
               'autoplay': true,
               'loop': true
           }
       );
    });
   </script>     
@endif
@endpush