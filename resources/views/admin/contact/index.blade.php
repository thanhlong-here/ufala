@php
$title = config('app.prefix')[$prefix] ?? 'liên lạc';

$title= __( 'Danh sách '.$title);

@endphp
@section('body')
<x-block class="content-wrapper">
    <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
        <div class="row">
            <div class="col-md-4">
                <ul class="nav navbar-nav">

                    <li class="nav-item">

                        <button type="button" class="close-parent black close"> <i class="ft-arrow-left"></i></button>
                    </li>
                    <li class="nav-item">
                        <h4>{{ $title }} </h4>
                    </li>
                </ul>

            </div>
            <div class="col-md-8">
                <div class="pull-right">
                    <button data-src="{{$xlink->categories}}" class="widget btn mr-1">
                        <i class="ft-grid"> </i>
                        {{__('Nhóm ') }}
                    </button>

                    <button data-src="{{$xlink->create}}" class="widget btn  btn-primary">
                        <i class="ft-plus"> </i>
                        {{__('Thêm mới') }}
                    </button>
                </div>

            </div>
        </div>

    </nav>
    <div class="container pt-2">
        <div class="card">
            <div class="card-block">

                <div class="mb-2">
                    Tìm kiếm
                </div>

                <div id="table" class="table-responsive">
                    <table class="table">
                        <thead>
                            <th style="width:1rem">

                            </th>
                            <th style="width:1rem">

                            </th>
                            <th>
                                {{__('Thông tin')}}
                            </th>
                            <th style="width:12rem">

                                {{__('Địa chỉ')}}
                            </th>
                            <th>

                                {{__('Email')}}
                            </th>
                            <th>

                                {{__('Số điện thoại')}}
                            </th>
                            <th>

                                {{__('Nhóm')}}
                            </th>

                            <th style="width:2rem">
                                {{__('Trạng thái') }}
                            </th>


                        </thead>
                        <tbody>

                            @foreach ($list as $row)
                            @php
                            $edit = route('contacts.edit',$row);

                            @endphp

                            @push('outer')
                            <x-modal.delete :row="$row" action="contacts.destroy" />
                            @endpush

                            <tr>
                                <th>
                                    <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>
                                </th>
                                <th>

                                    <button data-src="{{$edit}}" class="widget btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>
                                </th>

                                <td>
                                    <div class="font-medium-1 text-bold-600">
                                        {{$row->name}}
                                    </div>
                                    <div>
                                        {{__('Lúc')}} : {{$row->created_at}}
                                    </div>
                                </td>
                                <td>

                                    <span class="font-medium-2">
                                        {{$row->address}}
                                    </span>
                                </td>
                                <td>

                                    <span class="font-medium-2">
                                        {{$row->email}}
                                    </span>
                                </td>
                                <td>

                                    <span class="font-medium-2">
                                        {{$row->phone_number}}
                                    </span>
                                </td>


                                <td>
                                    @if($row->category)
                                    <span class="font-medium-2">
                                        {{ $row->category->name }}
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <span class="float-xs-right">
                                        {{$row->status}}
                                    </span>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <div class="pull-right">
                        {{$list->appends(request()->input())->render('vendor.pagination.simple')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-block>
@endsection

@push('outer')
<x-modal class="modal-xl mt-0" id="widget">

    <iframe src="about:blank" loading="lazy" />
</x-modal>
@endpush
<x-layout.admin />