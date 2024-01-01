@section('body')

<x-block class="content-wrapper">
  <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper">
      <ul class="nav navbar-nav step">


        <li class="nav-item">
          <span class="circle"> 1 </span> {{__("Thông tin đơn hàng")}}
        </li>

        <li class="nav-item ">

          <span class="circle"> 2 </span>
          {{__("Thông tin liên hệ")}}
        </li>
        <li class="nav-item active ">

          <span class="circle"> 3 </span> {{__("Đặt hàng")}}
        </li>


      </ul>


    </div>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">

      <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
    </div>

  </nav>

  <div class="container p-2">

    <div class="content-header text-xs-center">
      <h4> {{__('Cám ơn bạn đã đặt hàng')}} </h4>
      <p> {{__('Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất')}} </p>
    </div>
    <div class="content-body">


      <div class="form-body">
        <div class="card">
          <div class="card-header">
            <div class="card-title"> {{__('Thông tin đơn hàng')}} </div>
          </div>
          <div class="card-body">
            <div class="card-block">
              <div class="row">
                <label class="col-xs-6">{{__('Mã đơn')}} :</label>
                <span class="text-bold-700 ">{{$order->prefix."-".$order->id}}</span>
              </div>
              <div class="row">
                <label class="col-xs-6">{{__('Tổng đơn')}} :</label>
                <span class="text-bold-700 ">{{$total}}</span>
              </div>
              <div class="row">
                <label class="col-xs-6">{{__('Hình thức thanh toán')}} :</label>
                <span class="text-bold-700 ">{{$order->payment}}</span>
              </div>
            </div>
            <div class="card-block">

              <table class="table">
                <thead>
                  <th> {{__('Tên sản phẩm')}}</th>

                  <th> {{__('Số lượng')}}</th>
                </thead>
                <tbody>
                  @foreach($items as $item)
                  <tr>
                    <td>
                      <p class="text-justify"> {{ $item->product->name}} </p>
                      <p> {{__('Đơn giá')}} : <span class="text-bold-700 "> {{$item->product->price_format}} đ </span></p>
                    </td>

                    <td> <span class="text-bold-700 "> {{ $item->quantity }} </span></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>



          </div>
        </div>

      </div>

    </div>
  </div>
</x-block>

@endsection

<x-layout.simple class="fixed-navbar" />