@section('content')
<div class="content-wrapper">
    <x-block class="content-header row mb-1">
        <div class="content-header-left col-md-6">
            <h3 class="content-header-title">

                {{ __("Danh sách sản phẩm liên kết") }}
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

                    {{__('Thêm sản phẩm') }}
                </button>
            </div>
        </div>
    </x-block>
    <x-block class="content-body">
        <div class="card">
            <div class="card-block">

                <div class="mb-2">
                    <x-product.search />
                </div>

                <div id="table" class="table-responsive  table-choice">
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

                            <tr>
                                <td>
                                    <button data-toggle="modal" data-action="{{route('products.destroy',$row)}}" data-target="#modal-confirm" class="act-form btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>
                                </td>
                                <td>

                                    <button data-src="{{route('dropships.edit',$row)}}" class="widget btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>
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
                                <td class="text-xs-center">
                                    {{ $row->dropship_bonus }} %
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

@push('outer')
<x-modal class="modal-xl mt-0" id="widget">

    <iframe src="about:blank" loading="lazy" />
</x-modal>
<x-modal id="modal-confirm">
    <x-form method='DELETE'>
        <div class="card">
            <div class="card-block">
                <h4 class="pull-left">
                    {{__('Dữ liệu sẽ bị mất!')}}
                </h4>
                <div class="pull-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Quay lại')}}</button>
                    <button type="submit" class="btn btn-primary">{{__('Chấp nhận')}}</button>
                </div>
            </div>
        </div>
    </x-form>
</x-modal>
@endpush
<x-layout.admin />