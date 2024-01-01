<table class="table">
    <thead>

        <th style="width: 10%">
        </th>
        <th style="width: 20%">
            {{ __('Danh sách Landing Page') }}
        </th>
        <th style="width: 20%;">
            {{ __('Được tạo bởi') }}
        </th>
        <th style="width: 15%;">
            {{ __('Chỉnh sửa bởi') }}
        </th>
        <th style="width: 5%;">

        </th>
    </thead>
    <tbody>
        @if($ldp->total() > 0)
        @foreach ($ldp as $key => $row)
            <tr style="position: relative">
                <td>
                    <div style="display: flex;">
                        <span class="font-medium-2" style="width: 10%">
                            #{{$key+1}}
                        </span>
                        <div class="avatar-ldp" style="background-image: url({{asset("public/avatar/".@($row->medias)[0]->name)}});">
                        </div>
                    </div>
                </td>
                <td> {{ @$row->name }}</td>
                <td> {{ @$row->user_create->name }} <br>
                    <span>{{$row->created_at}}</span>
                </td>
                <td> @if(!empty($row->user_update)){{ @$row->user_update->name }} <br>
                    <span>{{$row->updated_at}}</span>
                    @endif
                </td>
                <td>
                    <span class="dots-3" style="font-size: 7px">
                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                    </span>
                    <div id="myDropdown-{{ $key }}" class="listHandle">
                        <ul>
                            <li><a href="{{ route('admin.el-builder', $row->id) }}" target="_blank">Chỉnh sửa giao diện</a></li>
                            <li><a>Chỉnh sửa tên</a></li>
                            <li><a>Chỉnh mã chuyển đổi</a></li>
                            <li><a>Tạo bản sao</a></li>
                            <li>
                                <form id="delete-ldp-{{$row->id}}" method="POST" action="{{route('create.destroy',$row->id)}}">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <a href="javascript:void(0)" style="color: red" onclick="$('#delete-ldp-{{$row->id}}').submit()">Xóa</a>
                                  </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        @else
            <tr class="no-temp">
                <td colspan="5">
                    <h3>Chưa có template cho danh mục này</h3>
                    <a href="/admin/element-builder" class="btn btn-primary white round"> + Tạo Landing Page </a>
                </td>
            </tr>
        @endif
    </tbody>

</table>

<div class="pull-right">

    {{ $ldp->render('pagination::bootstrap-4') }}

</div>
@push('script')

    <script type="text/javascript">
        let page = 1;
        $("select[name=category_id]").on('change',function () {
            getTemplates(1);
        });
        var mouse_is_inside = false;

        $(document).ready(function() {
            $('.dots-3').click(function() {
                $(this).next().show();
            })
            $('.listHandle').hover(function() {
                mouse_is_inside = true;
            }, function() {
                mouse_is_inside = false;
            });

            $("body").mouseup(function() {
                if (!mouse_is_inside) $('.listHandle').hide();
            });
        });
        $('.pagination a').on('click', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                getTemplates(page);
        });
        
        function getTemplates(page)
        {
            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    });
                    $.ajax({
                        async: false,
                        data: {
                            category_id : $("select[name=category_id]").val(),
                            page : page
                        },
                        type: "GET",

                        url: "{{ route('landingpage.listElement') }}",

                        beforeSend: ()=>$('.overlay').show(),

                        success: function(res) {
                            $('.list-ldp').html(res);
                            $('.pagination a').on('click', function(e) {
                                    e.preventDefault();
                                    var page = $(this).attr('href').split('page=')[1];
                                    getTemplates(page);
                            });
                            $('.dots-3').click(function() {
                                $(this).next().show();
                            })
                            $('.listHandle').hover(function() {
                                mouse_is_inside = true;
                            }, function() {
                                mouse_is_inside = false;
                            });

                            $("body").mouseup(function() {
                                if (!mouse_is_inside) $('.listHandle').hide();
                            });
                            setTimeout(function(){
                                $('.overlay').hide()
                            }, 500);
                        },
                        error: function(xhr, status, error) {
                            console.log(status + ': ' + error);
                        }
                    });
        }
    </script>
@endpush
