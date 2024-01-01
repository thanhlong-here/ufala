@props([
'category'=>0,
'action'=>'products.update',
'title' =>__('Chỉnh sửa thông tin sản phẩm'),
'prefix' => 'product',
'product' => new App\Models\Product])

@php
$action = $product->id ? route('products.update',$product) : route('products.store');
@endphp
<x-form method="{{$product->id ? 'PUT' :'POST' }}" enctype="multipart/form-data" action="{{ $action }}">
  <input type="hidden" name="prefix" value="{{$prefix}}" />

  <div style="z-index: 99; top:0" class="fixed block ">
    <div class="row bg-white shadow p-1">
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

          <ul class="pull-right nav navbar-nav">
            <li class="nav-item">
              <input class="form-control" name="code" placeholder="{{__('Mã gợi nhớ')}}" value="{{ $product->code }}" />
            </li>
            <li class="nav-item">
              <x-select.categories name="category_id" class="form-control" prefix="{{$prefix}}" selected="{{$product->category_id}}" />

            </li>
            <li class="nav-item">

              <x-select.status />
            </li>
            <li class="nav-item">
              <button id="btn_send" type="submit" class="btn btn-primary">
                {{__('Gửi thông tin')}}
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-2 container">

    <div class="col-md-8">
      <div class="card">

        <div class="card-block">
          <div class="form-group">

            <input type="text" placeholder="{{__('Tên sản phẩm')}}" class="form-control" value="{{ $product->name }}" name="name" />

          </div>


          <div class="form-group ">

            <x-editor placeholder="{{__('Mô tả sản phẩm')}}" mode="editor">{!!$product->content!!}</x-editor>
          </div>
        </div>
      </div>


      <div class="form-group ">
        <ul class="nav nav-tabs nav-top-border no-hover-bg">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#layout_mobile" aria-expanded="true">
              <i class="fa fa-play"></i> {{__("Giao diện di động")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#layout_desktop" aria-expanded="false">
              <i class="fa fa-flag"></i>{{__("Giao diện Desktop")}}</a>
          </li>

        </ul>
        <div class="tab-content px-1 pt-1">
          <div role="tabpanel" class="tab-pane active" id="layout_mobile">
            <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
          </div>
          <div role="tabpanel" class="tab-pane" id="layout_desktop">
            <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-4">




      <div class="card box">
        <div class="card-header">
          <h4 class="card-title">{{ __('Xét giá') }}</h4>

          <div class="heading-elements">
            <a data-action="collapse"><i class="ft-minus"></i></a>
          </div>

        </div>
        <div class="card-body">
          <div class="card-block">
            <div class="row mb-2">

              <label class="col-xs-4 font-medium-2">{{__('Giá nhập')}} :</label>
              <div class="col-xs-8">
                <div class="input-group">
                  <input type="number" name="price_purchase" value="{{ $product->price_purchase }}" class="form-control">
                  <span class="input-group-addon"> đ </span>
                </div>
              </div>
            </div>

            <div class="row mb-2">

              <label class="col-xs-4 font-medium-2">{{__('Giá bán')}} :</label>
              <div class="col-xs-8">
                <div class="input-group">
                  <input type="number" name="price" value="{{ $product->price }}" class="form-control">
                  <span class="input-group-addon"> đ </span>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>

      <div class="card box">
        <div class="card-header">
          <h4 class="card-title">{{ __('Chiến dịch') }}</h4>

          <div class="heading-elements">
            <a data-action="collapse"><i class="ft-minus"></i></a>
          </div>

        </div>
        <div class="card-body">
          <div class="card-block">


            <div class="form-group">
              <div class="mb-1">
                <label class="font-medium-2">{{__('Thưởng CTV')}} : </label>
              </div>
              <fieldset>
                <div class="input-group">
                  <input type="number" name="bonus_value" value="$product->bonus_value" class="form-control" placeholder="{{__('Thưởng sau khi bán')}}">
                  <span class="input-group-addon"> % {{__('Giá bán')}} </span>
                </div>
              </fieldset>

            </div>

            <div class="form-group">
              <div class="mb-1">
                <label class="font-medium-2">{{__('Thưởng CTV')}} : </label>
              </div>
              <fieldset>
                <div class="input-group">
                  <input type="number" name="bonus_percent" value="$product->bonus_value" class="form-control" placeholder="{{__('Thưởng sau khi bán')}}">
                  <span class="input-group-addon"> % {{__('Giá bán')}} </span>
                </div>
              </fieldset>

            </div>

            <div class="form-group">
              <div class="mb-1">
                <label class="font-medium-2">{{__('Số lượng')}} : </label>
              </div>
              <fieldset>
                <div class="input-group">
                  <input type="number" name="total_limit" value="$product->total_limit" class="form-control" placeholder="{{__('Thưởng sau khi bán')}}">
                  <span class="input-group-addon"> {{__('Sản phẩm')}} </span>
                </div>
              </fieldset>

            </div>

            <div class="form-group">
              <div class="mb-1">
                <label class="font-medium-2">{{__('Thời gian')}} : </label>
              </div>
              <fieldset>
                <div class="input-group">
                  <input type="number" name="bonus_value" value="$product->bonus_value" class="form-control" placeholder="{{__('Thưởng sau khi bán')}}">
                  <span class="input-group-addon"> % {{__('Giá bán')}} </span>
                </div>
              </fieldset>

            </div>

          </div>
        </div>
      </div>
    </div>




  </div>

  </div>

</x-form>