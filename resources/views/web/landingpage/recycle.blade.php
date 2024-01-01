@push('css')
    <style>
        .dots-3:hover {
            cursor: pointer;
        }

        select,
        input[type="text"] {
            border-radius: 40px !important;
        }

        table th {
            border-top: none !important;
        }

        .search {
            margin-top: 25px;
        }

        .listHandle {
            position: absolute;
            border: 1px solid #00000014;
            display: none;
            top: 33px;
            right: 15px;
            width: 186px;
            height: 204px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            background: #fff;
            border-radius: 4px;
            margin-top: 4px;
            z-index: 9999;
        }

        .listHandle ul {
            padding: 10px 20px;
            
        }

        .listHandle ul li {
            list-style: none;
            
        }

        .listHandle ul li a {
            line-height: 20px;
        }

        #table.list-ldp {
            overflow-x: initial !important;
        }

    </style>
@endpush
@push('script')
    <script>
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
    </script>
@endpush
@section('content')

    <x-block class="container-fluid">

        <div class="card">
            <div class="card-block">
                <div class="search">
                    <x-landingpage.search />
                </div>
                <div id="table" class="table-responsive list-ldp">
                    <table class="table">
                        <thead>

                            <th style="width: 30%">
                                {{ __('Danh sách Landing Page') }}
                            </th>
                            <th style="width: 15%;">
                                {{ __('Thời gian') }}
                            </th>
                            <th style="width: 10%;">
                                {{ __('Lượt xem') }}
                            </th>
                            <th style="width: 10%;">
                                {{ __('Lượt click') }}
                            </th>
                            <th style="width: 10%;">
                                {{ __('Chuyển đổi') }}
                            </th>
                            <th style="width: 10%;">
                                {{ __('Tỷ lệ %') }}
                            </th>
                            <th style="width: 10%;">
                                {{ __('Doanh thu') }}
                            </th>
                            <th style="width: 5%;">

                            </th>
                        </thead>
                        <tbody>

                            @foreach ($landingpages as $key => $row)
                                <tr style="position: relative">
                                    <td>
                                        <div style="display: flex;">
                                            <span class="font-medium-2" style="width: 10%">
                                                #{{$key+1}}
                                            </span>
                                            <div>
                                                <p>{{$row->name}}</p>
                                                @if(!empty($row->link->short))
                                                <p><a href="{{route('landingpage.publish',@$row->link->short)}}" target="_blank">{{route('landingpage.publish',@$row->link->short)}}</a></p>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td> {{ @$row->created_at }}</td>
                                    <td> 0</td>
                                    <td> 0</td>
                                    <td> 0</td>
                                    <td> 0</td>
                                    <td> 0</td>
                                    <td>
                                        <span class="dots-3" style="font-size: 7px">
                                            <i class="fa fa-circle-o" aria-hidden="true"></i>
                                            <i class="fa fa-circle-o" aria-hidden="true"></i>
                                            <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        </span>
                                        <div id="myDropdown-{{ $key }}" class="listHandle">
                                            <ul>
                                                <li><a href="{{ route('landingpage.work', $row->id) }}" target="_blank">Chỉnh sửa giao diện</a></li>
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
                        </tbody>

                    </table>

                    <div class="pull-right">
                        {{ $landingpages->render() }}

                    </div>
                </div>
            </div>
        </div>
    </x-block>
@endsection

<x-layout.auth />
