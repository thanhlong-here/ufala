@section('body')

<x-block class="content-wrapper">
  <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper">
      <ul class="nav navbar-nav step">


        <li class="nav-item active ">
          <span class="circle"> 1 </span> {{__("Thông tin đơn hàng")}}
        </li>

        <li class="nav-item ">

          <span class="circle"> 2 </span>
          {{__("Thông tin liên hệ")}}
        </li>
        <li class="nav-item ">

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

      <x-form class="form">
        <div class="form-body">

          <div class="card">
            <div class="card-header">
              <div class="card-title"> {{__('Thông tin đặt hàng')}} </div>
            </div>
            <div class="card-block">
              @foreach($cart as $key => $dropship)
              <div class="row">
                <div class="col-md-3">

                </div>

                <div class="col-md-9">
                  <div class="mb-2">

                    <h4 class="text-justify"> {{$dropship->item->name}} </h4>

                  </div>

                  <div class="row">

                    <div class="col-md-6">
                      <div style="margin-top: .5rem;" class="font-medium-3">
                        <label> {{ __('Giá bán') }} : </label>
                        <span class="text-bold-700 "> {{$dropship->item->price_format}} đ </span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div style="margin-top: .5rem;" class="font-medium-3 col-md-6">
                          <label> {{ __('Số lượng') }} : </label>
                        </div>
                        <div class="col-md-6">
                          <input type="number" value="{{$dropship->quantity}}" name="qty" class="form-control text-xs-center" />

                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
              @endforeach

            </div>
            <div class="card-footer font-medium-3">
              <div class="offset-md-6 col-md-6">
                <div class="clearfix">
                  <label class="pull-right"> Tạm tính : <span class="text-bold-700 "> {{ $total }} </span></label>
                </div>

                <a href="{{route('dropship.order',$short->short)}}" class="block btn btn-primary">{{__('Tiếp tục')}}</a>
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