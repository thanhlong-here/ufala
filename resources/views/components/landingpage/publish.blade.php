@auth
    {{--                    The user is authenticated...--}}
    <li class="nav-item mr-1">
        <button data-toggle="modal" data-target="#modal-create-landingpage"  class="btn  btn-second round btn-publish" onclick="updateLandinpageTemp()">
            @if(!empty($landingpage->landingpage_id)) {{__('Cập nhật')}} @else {{__('Xuất bản')}} @endif
        </button>
        @push('outer')
            <x-modal id="modal-create-landingpage">
                <div class="modal-content">
                    <form action="@if(!empty($landingpage->landingpage_id)) {{route('create.update',$landingpage->landingpage_id)}} @else {{route('create.store')}} @endif" method="post">
                        @csrf
                        @if(!empty($landingpage->landingpage_id)) {{ method_field('PUT') }} @endif
                        <input type="hidden" id="avatar-ldp" name="avatar" value="">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Xuất bản landing page</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group ">
                                <label for="">Tên :</label>
                                <input type="text" id="name-ldp" name="name" value="{{@$landingpage->name}}" class="form-control" placeholder="nhập tên landing page" required="required">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn  btn-second btn-primary ldp-publish" type="button">@if(!empty($landingpage->landingpage_id)) {{__('Cập nhật')}} @else {{__('Xuất bản')}} @endif</button>
                        </div>
                    </form>
                </div>
            </x-modal>
        @endpush
    </li>
@endauth
@guest
    {{--                    The user is not authenticated...--}}
    <li class="nav-item mr-1">
        <button data-src="{{route('login')}}" class="btn  btn-second round widget btn login-btn btn-publish" >{{__('Xuất bản')}}</button>
    </li>
    @push('outer')
        <x-modal  id="widget">
            <iframe src="about:blank" loading="lazy" class="w-100" />
        </x-modal>
    @endpush
@endguest

@push('script')
    <script type="text/javascript">
        $(".ldp-publish").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
            $.ajax({
                data: {
                    id : {{@$landingpage->id}},
                    avatar : $('#avatar-ldp').val(),
                    device : '{{@Request::route('dv') ?? 'm'}}',
                    name : $('#name-ldp').val(),
                    prefix : '{{@Request::get('prefix') ?? ''}}'
                },
                type: @if(!empty($landingpage->landingpage_id)) 'PUT' @else 'POST' @endif,
                url: @if(!empty($landingpage->landingpage_id)) "{{route('create.update',$landingpage->landingpage_id)}}" @else "{{route('create.store')}}" @endif,
                beforeSend: ()=>$('.overlay').show(),

                success: function(res) {
                    if(res.success){
                        let link = `{{route('home')}}/ldp/${res.data.short.short}`;
                        $('.facebook-id').val(res.data.short.track_facebook);
                        $('.google-analytics-id').val(res.data.short.track_google_analytics);
                        $('.tiktok-id').val(res.data.short.track_tiktok);
                        $('.google-ads-id').val(res.data.short.track_google_ads);
                        $('#modal-create-landingpage').modal('hide');
                        $('.short-link').attr('href',link);
                        $('.short-link').html(link);
                        $('.ldp-name').val(res.data.ldp.name);
                        $('.id-ldp').val(res.data.ldp.id);
                        $('#link-setup').modal('show');
                    }
                    $('.overlay').hide();
                },
                error: function(xhr, status, error) {
                    console.log(status + ': ' + error);
                }
            });
        });
        $(".ldp-republish,.update-utmsource").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
            $.ajax({
                data: {
                    id : {{@$landingpage->id}},
                    avatar : $('#avatar-ldp').val(),
                    device : '{{@Request::route('dv') ?? 'm'}}',
                    name : $('.ldp-name').val(),
                    utm_id : {
                        facebook_id : $('.facebook-id').val(),
                        google_analytics_id : $('.google-analytics-id').val(),
                        tiktok_id : $('.tiktok-id').val(),
                        google_ads_id : $('.google-ads-id').val(),
                    }
                },
                type: 'PUT',
                url: `{{route('home')}}/landingpage/create/`+$('.id-ldp').val(),
                beforeSend: ()=>$('.overlay').show(),

                success: function(res) {
                    if(res.success){
                        $('.ldp-name').val(res.data.ldp.name);
                    }
                    $('.overlay').hide();
                },
                error: function(xhr, status, error) {
                    console.log(status + ': ' + error);
                }
            });
        });
    </script>
@endpush

