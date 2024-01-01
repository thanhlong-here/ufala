@push('css')
<style>
    .select2-selection {
        border-radius: 1.5rem !important;
    }

    .drop-avatar {
        width: 80px;
        height: 80px;
        float: left;
    }
</style>

@endpush
@section('content')

<x-block class="container-fluid">

    <div class="card card-round shadow">
        <div class="card-block">

            <div class="mb-2">
                <x-product.search />
            </div>

            <div id="table" class="table-responsive">
                <table class="table">
                    <thead>

                        <th>
                            {{__('Tên sản phẩm')}}
                        </th>
                        <th>
                            {{__('Trạng thái')}}
                        </th>


                        <th>
                            {{__('Loại sản phẩm')}}
                        </th>
                        <th>
                            {{__('Giá sản phẩm')}}
                        </th>

                        <th>

                            {{__('Hoa hồng')}}
                        </th>


                        <th>

                        </th>
                    </thead>
                    <tbody>

                        @foreach ($list as $row)
                        <tr>

                            <td>
                                <div class="drop-avatar">
                                    @if($row->avatar)

                                    <img class="img-fluid" src="{{asset($row->avatar->path)}}" />
                                    @endif
                                </div>

                                <p class="text-bold-600">
                                    {{$row->name}}
                                </p>


                            </td>
                            <td> {{$row->status}}</td>

                            <td>
                                {{$row->category->name}}
                            </td>
                            <td>
                                {{number_format($row->price)}} đ
                            </td>
                            <td>
                                {{ $row->dropship_bonus }} %
                            </td>


                            <td>
                                <button data-src="{{route('dropship.sharelink',$row)}}" class="btn btn-success widget round block"> {{__('Lấy link')}} </button>
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
@endsection

@push('outer')
<x-modal id="widget">
    <iframe src="about:blank" style="height:0px" loading="lazy" />
</x-modal>

@endpush
<x-layout.drop />