@push('css')
    <style>

        fieldset {
            display: none
        }

        fieldset.show {
            display: block
        }

        select:focus,
        input:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #2196F3 !important;
            outline-width: 0 !important;
            font-weight: 400
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .tabs {
            margin: 2px 32px 0px 5px;
            padding-bottom: 4px;
            cursor: pointer
        }

        .tabs:hover,
        .tabs.active {
            border-bottom: 2px solid #00C4CC
        }

        a:hover {
            text-decoration: none;
            color: #1565C0
        }

        .box {
            margin-bottom: 10px;
            border-radius: 5px;
            padding: 10px
        }

        .modal-backdrop {
            background-color: #64B5F6
        }

        .line {
            background-color: #CFD8DC;
            height: 1px;
            width: 100%
        }

        @media screen and (max-width: 768px) {
            .tabs h6 {
                font-size: 12px
            }
        }
        .d-flex{
            display: flex;
        }
        .congrats{
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 28px;

            /* Primary */

            color: #33CCCC;

        }
        .link-body{
            padding: 32px 40px 10px 40px;
        }
        .link-body label{
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 14px;
            /* identical to box height */
            color: #AAAAAA;
            opacity: 0.8;
        }
        #link-setup .modal-tab,#link-setup .modal-footer {
            border: none!important;
            padding: 0 37px 20px 20px;
        }
        .border-0{
            border: none!important;
        }
        #link-setup .modal-title{
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 28px;
            color: #333F48;
        }
        .padding-left-32{
            padding-left: 32px;
        }
        .ldp-close{
            color: #333F48;
            font-size: 16px;
        }
        .content-link{
            display: flex;
            color: #0092FF!important;
        }
        .has-link{
            width: 70%;
        }
        .has-event{
            width: 30%;
            text-align: right;
        }
        .has-event button{
            margin-left: 10px;
            background: transparent;
            color: #0092FF!important;
        }
    </style>
@endpush

<x-modal id="link-setup">
    <div class="modal-content">
        <div class="modal-header border-0 padding-left-32">
            <button type="button" class="close ldp-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title">
                <i class='fa fa-road2'></i> Thiết lập link
            </h4>
        </div>
        <div class="modal-tab row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0">
            <div class="tabs active" id="tab01">
                <h6 class="font-weight-bold">Xuất bản</h6>
            </div>
            <div class="tabs" id="tab02">
                <h6 class="text-muted ">Mã chuyển đổi</h6>
            </div>
        </div>
        <div class="line"></div>
        <div class="modal-body">
            <fieldset class="show" id="tab011">
                <div class="bg-light">
                    <p class="congrats">Chúc mừng bạn đã xuất bản thành công!</p>
                </div>
                <form action="" name="republish">
                    <input type="hidden" value="" class="id-ldp">
                    <div class="form-group">
                        <label for="">Tên trang</label>
                        <input type="text" name="name" class="form-control ldp-name">
                    </div>
                    <div class="form-group">
                        <label for="">Link trang Landing Page của bạn đã được tự động rút gọn link</label>
                        <div class="form-control content-link">
                            <div class="has-link">
                                <a href="" class="short-link"></a>
                            </div>
                            <div class="has-event">
                                <button><i class="fa fa-link" aria-hidden="true"></i></button>
                                <button><i class="fa fa-qrcode" aria-hidden="true"></i></button>
                                <button><i class="fa fa-clone" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary float-right ldp-republish">Cập nhật</button>
                    </div>
                </form>
            </fieldset>
            <fieldset id="tab021">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="">Facebook Pixel ID</label>
                        <input type="text" class="form-control facebook-id">
                    </div>
                    <div class="col-md-6">
                        <label for="">Google Analytics ID</label>
                        <input type="text" class="form-control google-analytics-id">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="">TikTok Pixel ID</label>
                        <input type="text" class="form-control tiktok-id">
                    </div>
                    <div class="col-md-6">
                        <label for="">Google Ads ID</label>
                        <input type="text" class="form-control google-ads-id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary float-right update-utmsource">Lưu</button>
                </div>
            </fieldset>
        </div>
    </div>
</x-modal>

@push('script')
    <script type="text/javascript">
        // {{--$(".ldp-publish").click(function () {--}}
        // {{--    $.ajaxSetup({--}}
        // {{--        headers: {--}}
        // {{--            'X-CSRF-TOKEN': '{{ csrf_token() }}'--}}
        // {{--        }--}}
        // {{--    });--}}
        // {{--    $.ajax({--}}
        // {{--        data: {--}}
        // {{--            id : {{@$landingpage->id}},--}}
        // {{--            avatar : $('#avatar-ldp').val(),--}}
        // {{--            device : '{{Request::get('device') ?? 'M'}}',--}}
        // {{--            name : $('#name-ldp').val()--}}

        // {{--        },--}}
        // {{--        type: @if(!empty($landingpage->landingpage_id)) '{{ method_field('PUT') }}' @else 'POST' @endif,--}}
        // {{--        url: @if(!empty($landingpage->landingpage_id)) "{{route('create.update',$landingpage->landingpage_id)}}" @else "{{route('create.store')}}" @endif,--}}
        // {{--        beforeSend: ()=>$('.overlay').show(),--}}

        // {{--        success: function(res) {--}}
        // {{--            if(res.success){--}}
        // {{--                console.log(res);--}}
        // {{--            }--}}
        // {{--            $('.overlay').hide();--}}
        // {{--        },--}}
        // {{--        error: function(xhr, status, error) {--}}
        // {{--            console.log(status + ': ' + error);--}}
        // {{--        }--}}
        // {{--    });--}}
        // {{--});--}}
        $(document).ready(function(){

            $(".tabs").click(function(){

                $(".tabs").removeClass("active");
                $(".tabs h6").removeClass("font-weight-bold");
                $(".tabs h6").addClass("text-muted");
                $(this).children("h6").removeClass("text-muted");
                $(this).children("h6").addClass("font-weight-bold");
                $(this).addClass("active");

                current_fs = $(".active");

                next_fs = $(this).attr('id');
                next_fs = "#" + next_fs + "1";

                $("fieldset").removeClass("show");
                $(next_fs).addClass("show");

                current_fs.animate({}, {
                    step: function() {
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'display': 'block'
                        });
                    }
                });
            });

        });
    </script>
@endpush
