@section('body')

<x-block class="content-wrapper">
  <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper">
      <ul class="nav navbar-nav step">


        <li class="nav-item">
          <span class="circle"> 1 </span> {{__("Thông tin đơn hàng")}}
        </li>

        <li class="nav-item ">

          <span class="circle  active "> 2 </span>
          {{__("Thông tin liên hệ")}}
        </li>
        <li class="nav-item">

          <span class="circle"> 3 </span> {{__("Đặt hàng")}}
        </li>


      </ul>


    </div>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">

      <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
    </div>

  </nav>
  <div class="container p-2">

    <div class="content-body">

      <x-form class="form" method="post" action="{{route('dropship.order.submit',$short->short)}}" >
        <div class="form-body">
          <div class="card">
            <div class="card-header">
              <div class="card-title"> {{__('Thông tin liên hệ')}} </div>
            </div>
            <div class="card-block row">
              <div class="col-md-6">

                <div class="form-group">

                  <input class="form-control" required placeholder="{{__('Tên liên hệ ')}}" name="name" value="{{old('name')}}" />
                </div>

                <div class="form-group">

                  <input class="form-control" required placeholder="{{__('Số điện thoại ( Bắt buộc) ')}}" type="number" name="phone_number" value="{{old('phone_number')}}" />
                </div>

                <div class="form-group">

                  <input class="form-control" type="email" placeholder="Email" name="email" value="{{old('email')}}" />
                </div>
                <div class="form-group">
                  <select class="form-control" required name="city_id">

                    <option value="">-- {{__('Chọn khu vực')}} --</option>
                    @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">

                  <input class="form-control" placeholder="{{__('Địa chỉ')}}" name="address" value="{{old('address')}}" />
                </div>



              </div>
              <div class="col-md-6 font-medium-3">


                <div class="card-body mb-2">
                  <h3 class="card-title"> {{__('Hình thức thanh toán')}} </h3>
                  <div class="form-group">
                    Thanh toán khi giao hàng ( COD)
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="content" rows="3" placeholder="{{__('Ghi chú')}}" class="form-control">{{old('content')}}</textarea>
                </div>

                <div class="card-footer">
                  <div class="row">
                    <label> Tổng thanh toán : <span class="text-bold-700 "> {{ $total }} </span></label>

                    <button class="btn btn-primary block"> {{__("Đặt hàng ngay")}} </button>
                  </div>
                </div>
              </div>

            </div>



          </div>
        </div>



      </x-form>
    </div>

  </div>

  </div>
</x-block>
@endsection


<x-layout.simple class="fixed-navbar" />