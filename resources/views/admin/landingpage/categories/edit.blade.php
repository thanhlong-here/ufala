@section('body')
<x-block class="content-wrapper">

  <x-form method="PUT" enctype="multipart/form-data" action="{{ route('dropships.update',$dropship) }}">

    <div style="z-index: 99; top:0" class="fixed block ">
      <div class="clearfix bg-white shadow p-1">
        <ul class="nav  navbar-nav pull-left">


          <li class="nav-item">
            <a class="nav-link" href="#"> {{__("Thông tin sản phẩm")}} </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> {{__("Mô tả")}} </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> {{__("Chính sách bán hàng")}} </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> {{__("Hình ảnh & video")}} </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> {{__("Xuất bản")}} </a>
          </li>

        </ul>

        <div class="pull-right">



          <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
        </div>
      </div>
    </div>

    <div class="pt-2 container">
      <div class="offset-md-2 col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">{{ __('Thông tin sản phẩm') }}</h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="card-block">
              <div class="form-group">

                <input type="text" placeholder="{{__('Tên sản phẩm')}}" class="form-control font-medium-2" value="{{ $dropship->name }}" name="name" />

              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <x-select.categories name="category_id" class="form-control font-medium-2" prefix="dropship" selected="{{$dropship->category_id}}" />

                </div>
                <div class="col-md-6">
                  <select name="supplier_id" class="form-control font-medium-2">
                    <option value="">--{{__('Chọn nhà cung cấp')}}--</option>
                  </select>
                </div>

              </div>
            </div>


          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h4 class="card-title">{{ __('Mô tả') }}</h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="card-block">
              <div class="form-group ">

                <x-editor placeholder="{{__('Mô tả sản phẩm')}}" mode="editor">{!!$dropship->content!!}</x-editor>
              </div>


            </div>


          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h4 class="card-title">{{ __('Chính sách bán hàng') }}</h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="card-block">
              <div class="form-group row ">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon btn-info">{{__('Giá bán')}} :</span>
                    <input type="number" name="price" value="{{ $dropship->price }}" class="form-control font-medium-2">
                    <span class="input-group-addon"> đ </span>
                  </div>
                </div>
                <div class="col-md-6">
                  <fieldset class=" position-relative">
                    <div class="input-group position-relative ">
                      <span class="input-group-addon btn-info">{{__('Thưởng Hoa hồng')}} :</span>
                      <input type="number" name="bonus_percent" placeholder="20" class="form-control font-medium-2">
                      <span class="input-group-addon"> % {{__('Giá bán')}} </span>
                    </div>
                </div>
                </fieldset>
              </div>


            </div>


          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h4 class="card-title">{{ __('Hình ảnh hoặc video') }}</h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="card-block">
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


          </div>


        </div>

        <div class="card">
          <div class="card-header">
            <h4 class="card-title">{{ __('Xuất bản') }}</h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="card-block">
              <div class="form-group row ">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon btn-info">{{__('Lượng sản phẩm')}} :</span>
                    <input type="number" name="price" value="{{ $dropship->price }}" class="form-control font-medium-2">
                   
                  </div>
                </div>
                <div class="col-md-6">
                  <fieldset class=" position-relative">
                    <div class="input-group position-relative ">
                      <span class="input-group-addon btn-info">{{__('Thời gian')}} :</span>
                      <input type="number" name="bonus_percent" placeholder="20" class="form-control font-medium-2">
                    </div>
                </div>
                </fieldset>
              </div>


            </div>


          </div>

          <div class="card-footer">

          </div>


        </div>
      </div>

      
      
    </div>


  </x-form>
</x-block>
@endsection

<x-layout.admin />