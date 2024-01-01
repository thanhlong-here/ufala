

@section('body')
<x-block class="content-wrapper">

  <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper row">

      <div class="col-md-8">
        <ul class="nav navbar-nav">

          <li class="nav-item">

            <button type="button" class="close-parent black close"> <i class="ft-arrow-left"></i></button>
          </li>
          <li class="nav-item">
            <h4> {{__("Thông tin liên hệ ")}} </h4>
          </li>
        </ul>

      </div>



    </div>

  </nav>


  <div class="pt-8 container">
    <x-form method="POST" enctype="multipart/form-data" action="{{ route('contacts.store') }}">
      <input type="hidden" name="prefix" value="{{$prefix}}" />
      <div class="card">

        <div class="card-body">
          <div class="card-block">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                  <input class="form-control" placeholder="{{__('Tên liên hệ')}}" name="name" />

                </div>

                <div class="form-group">
                  <input class="form-control" placeholder="Email" type="email" name="email" />
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Phone" type="number" name="phone" />

                </div>

                <div class="form-group row">
                  <div class="col-md-4">
                    <select name="city_id" class="form-control">
                      <option value="">--{{__('Chọn khu vực')}}</option>
                      @foreach( $cities as $city)
                      <option value="{{$city->id}}">
                        {{$city->name}}
                      </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-8">
                    <input type="text" placeholder="{{__('Địa chỉ')}}" class="form-control" name="address" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" name="description" placeholder="Ghi chú" rows='8'></textarea>
                </div>
                <div class="form-group row">
                  <div class="col-md-8">
                    <x-select.categories name="category_id" class="form-control" prefix="{{$prefix}}" />

                  </div>
                  <div class="col-md-4">

                    <button class="btn btn-primary block">{{__('Tạo mới')}}</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </x-form>
  </div>

</x-block>
@endsection

<x-layout.admin />