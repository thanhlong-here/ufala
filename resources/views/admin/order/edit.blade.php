@section('body')

<x-block class="content-wrapper">
  <nav class="navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper">
      <h4 class="content-header">
        Mã đơn hàng :
        <span class="text-bold-600"> #{{$order->prefix}}-{{$order->id}}</span>
      </h4>


    </div>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">

      <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>


    </div>

  </nav>
  <x-form method="PUT" enctype="multipart/form-data" action="{{ route('orders.update',$order) }}">

    <div class="pt-2 container">
      <div class="row">
        <div class="col-xs-7">
          <div class="card shadow">
            <div class="card-block">

              <table class="table">
                <thead>
                  <th> {{__('Tên sản phẩm')}}</th>

                  <th> </th>
                </thead>
                <tbody>
                  @foreach($order->items as $sold)
                  <tr>
                    <td>
                      <p class="text-justify"> {{ $sold->product->name}} </p>
                      <p> {{__('Đơn giá')}} : <span class="text-bold-700 "> {{$sold->product->price_format}} đ </span></p>
                    </td>

                    <td> X <span class="text-bold-700 "> {{ $sold->quantity }} </span></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="text-xs-right">

                <label class="mr-2"> Giá trị đơn hàng : <span class="text-bold-600"> {{number_format($order->total)}} đ </span> </label>
                @if($sold->product->dropship_bonus)
                <label class="mr-2"> Thưởng CTV : <span class="text-bold-600"> {{$sold->product->dropship_bonus}} % </span> </label>
                @endif
              </div>
            </div>

          </div>
        </div>
        <div class="col-xs-5">
          <div class="card shadow">

            <div class="card-block">
              <div class="row">
                <label class="col-xs-4">{{__('Tên khách hàng')}}:</label>
                <span class="text-bold-600"> {{$order->customer->name ?? ''}} </span>
              </div>
              <div class="row">
                <label class="col-xs-4">{{__('Số di động')}}:</label>
                <span class="text-bold-600"> {{$order->customer->phone_number ?? ''}}</span>
              </div>

              <div class="row">
                <label class="col-xs-4">{{__('Địa chỉ')}}:</label>
                <span class="text-bold-600">{{$order->customer->address ?? ''}}</span>
              </div>
              <div class="row">
                <label class="col-xs-4">{{__('Khu vực')}}:</label>
                <span class="text-bold-600">{{$order->customer->city->name ?? ''}}</span>
              </div>
              <div class="font-medium-2">
                {{$order->content ?? ''}}
              </div>

            </div>
            <div class="card-block">
              <div class="row">
                <label class="col-xs-5"> {{__('Hình thức thanh toán')}} : </label>
                <span class="text-bold-600">
                  {{$order->payment ?? ''}}
                </span>
              </div>
            </div>
            <div class="card-footer">

              <div class="row">
                
                <div class="col-xs-8">

                  <fieldset>
                    <div class="input-group">
                      <span class="input-group-addon">
                        {{__('Trạng thái') }} :
                      </span>
                      <select class="form-control">
                        @foreach(config("order.status") as $opt=>$name )
                        <option {{ ($order->status == $opt ? 'selected' :'' ) }} value="{{$opt}}">{{__($name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  </fieldset>
                </div>
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary block">{{__('Cập nhật')}}</button>

                </div>
              </div>

            </div>
          </div>
        </div>

      </div>



    </div>


  </x-form>
</x-block>
@endsection

<x-layout.admin />