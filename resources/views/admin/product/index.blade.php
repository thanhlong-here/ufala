
@section('content')
<div class="content-wrapper">
    <x-block class="content-header row mb-1">
        <div class="content-header-left col-md-6">
            <h3 class="content-header-title">

                {{ __("Danh sách sản phẩm") }}
            </h3>
        </div>
        <div class="content-header-right col-md-6">
            <div class="pull-right">


                <button data-src="{{$xlink->categories}}" class="widget btn mr-1">
                    <i class="ft-grid"> </i>

                    {{__('Nhóm sản phẩm') }}
                </button>
                <button data-src="{{$xlink->supplier}}" class="widget btn btn-info mr-1">
                    <i class="ft-briefcase"> </i>

                    {{__('Nhà cung cấp') }}
                </button>
                <button data-src="{{$xlink->create}}" class="widget btn  btn-primary">
                    <i class="ft-plus"> </i>

                    {{__('Tạo sản phẩm mới') }}
                </button>
            </div>
        </div>
    </x-block>
    <x-block class="content-body">
        <div class="card card-round shadow">
            <div class="card-block">

                <div class="mb-2">
                    <x-product.search />
                </div>

                <div id="table" class="table-responsive">
                    <table class="table">
                        <thead>
                            <th style="width:1rem">

                            </th>
                            <th style="width:1rem">

                            </th>
                            <th>
                                {{__('Tên sản phẩm')}}
                            </th>



                            <th style="width:8rem">
                                {{__('Đơn giá')}}
                            </th>
                            <th style="width:8rem">

                                {{__('Thưởng CTV')}}
                            </th>

                            <th>
                                <span class="float-xs-right">

                                    {{__('Trạng thái')}}
                                </span>
                            </th>

                        </thead>
                        <tbody>

                            @foreach ($list as $row)
                            @php
                            $edit = route('products.edit',$row);

                            @endphp

                            @push('outer')
                            <x-modal.delete :row="$row" action="products.destroy" />
                            @endpush
                            <tr>
                                <td>
                                    <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>
                                </td>
                                <td>

                                    <button data-src="{{$edit}}" class="widget btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>
                                </td>
                                <td>

                                    <div class="mb-2 font-medium-1 text-bold-600">
                                        {{$row->name}}
                                    </div>
                                    <div class="mb-1">

                                        <span class="font-medium-2">
                                            #{{$row->category->name}}
                                        </span>
                                    </div>
                                    @if($row->supplier)
                                    <div class="mb-1">
                                        <span class="font-medium-2 text-bold-600">
                                            {{__('Nhà cung cấp')}} :
                                        </span>
                                        <span class="font-medium-2">

                                            {{$row->supplier->name ?? ''}}
                                        </span>
                                    </div>
                                    @endif
                                </td>


                                <td> {{number_format($row->price)}} đ</td>
                                <td>
                                    {{ $row->bonus_value }} {{ $row->bonus_type }}
                                </td>

                                <td class="font-medium-1 text-bold-600">
                                    <span class="float-xs-right">

                                        {{$row->status}}
                                    </span>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <div class="pull-right">
                        {{$list->render()}}

                    </div>
                </div>
            </div>
        </div>
    </x-block>
</div>
@endsection

<x-layout.admin />