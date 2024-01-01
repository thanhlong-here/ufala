@section('content')
<div class="content-wrapper">
    <x-block class="content-header row mb-1">
        <div class="content-header-left col-md-6">
            <h3 class="content-header-title">

                {{ __("Đơn hàng dropship") }}
              
            </h3>
        </div>

    </x-block>
    <x-block class="content-body">
        <div class="card shadow">
            <div class="card-block">

                <div id="table" class="table-responsive">
                    <table class="table">
                        <thead>
                            <th style="width:1rem">

                            </th>
                            <th style="width:1rem">

                            </th>
                            <th>{{__('Thời gian')}}</th>
                            <th>
                                {{__('Thông tin đơn hàng')}}
                            </th>
                            <th>
                                {{__('Thông tin liên hệ')}}
                            </th>

                            <th>
                                {{__('Khu vực')}}
                            </th>



                            <th>
                                {{__('Hoa hồng')}}
                            </th>
                            <th class="text-xs-right">

                                {{__('Trạng thái')}}
                            </th>



                        </thead>
                        <tbody>

                            @foreach ($list as $row)
                            @php
                            $sold = $row->item->product;
                            $bonus= $sold->dropship_bonus;
                            $customer = $row->customer;
                            $at =$row->created_at;
                            @endphp
                            <tr>
                                <td>
                                    <button data-toggle="modal" data-action="{{route('orders.destroy',$row)}}" data-target="#modal-confirm" class="act-form btn close"><i class="ft ft-x"></i></button>
                                </td>
                                <td>

                                    <button data-src="{{route('orders.edit',$row)}}" class="widget btn btn-sm btn-primary"><i class="ft-edit"></i></button>
                                </td>
                                <td>
                                    <p class="text-bold-600">
                                        {{ $at->format('d-m-Y')  }}
                                    <p>
                                    <p class="font-small-3"> Lúc :
                                        {{ $at->format('h:i:s')  }}
                                    </p>
                                </td>
                                <td>


                                    <p class="text-bold-600">#{{$row->prefix}}-{{$row->id}}</p>
                                    <p><label> Giá trị : </label> <span class="text-bold-600"> {{number_format($row->total)}} đ </span></p>


                                </td>
                                <td>
                                    <p class="text-bold-600">{{ $customer->name ?? '' }} </p>
                                    <p> <label> {{__('Di động ')}} :</label> 
                                    <span class="text-bold-700">
                                     {{ $customer->phone_number ?? '' }} 
                                     </span>
                                    </p>
                                    <p> <label> Email :</label> {{ $customer->email ?? '' }} </p>
                                 
                                </td>
                                <td>
                                    {{ $row->customer->city->name}}
                                </td>

                                <td class="text-bold-600">
                                    {{$bonus}} %
                                </td>

                                <td class="text-xs-right text-bold-600">
                                    {{ config('order.status')[$row->status] }}
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