@push('css')
<link href=" {{asset('theme/view/dropship/style.css')}}" rel="stylesheet">
@endpush
@push('script')
<script src="{{asset('theme/view/dropship/functions.js')}}"></script>
<script>
  _token = '{{ csrf_token() }}';
  _upload = '{{ route("tmp.upload") }}';
  _remove = "{{ url('dev/comp/tmp/remove') }}/";


  $(window).on('load', function() {
    tabs = $('.tabs .jump');
    jump();
    scroll();

    upload();
    addRemove();
  });
</script>
@endpush
@section('body')

<x-block class="content-wrapper">
  <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
    <div class="navbar-wrapper">
      <ul class="nav navbar-nav tabs">


        <li class="nav-item">
          <a class="nav-link jump to" href="#info"> {{__("Thông tin sản phẩm")}} </a>
        </li>

        <li class="nav-item">
          <a class="nav-link jump" href="#policy"> {{__("Chính sách bán hàng")}} </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link jump" href="#gallery"> {{__("Hình ảnh & video")}} </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link jump" href="#publish"> {{__("Xuất bản")}} </a>
        </li>

      </ul>


    </div>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">

      <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
    </div>

  </nav>
  <x-form method="POST" enctype="multipart/form-data" action="{{ route('dropships.store') }}">



    <div class="pt-2 container">
      <div class="offset-md-2 col-md-8">
        <div class="card">
          <div id="info" class="card-header">
            <h4 class="card-title">{{ __('Thông tin sản phẩm') }}</h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="screen-block">
              <div class="card-block">
                <div class="form-group">

                  <input type="text" placeholder="{{__('Tên sản phẩm')}}" class="form-control font-medium-2" name="name" />

                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <x-select.categories name="category_id" class="form-control font-medium-2" prefix="dropship" />

                  </div>
                  <div class="col-md-6">
                    <select name="supplier_id" class="form-control font-medium-2">
                      <option value="">--{{__('Chọn nhà cung cấp')}}--</option>
                    </select>
                  </div>

                </div>
                <div class="form-group ">
                  <label>{{__('Mô tả')}} :</label>
                  <x-editor name="content" placeholder="{{__('Mô tả sản phẩm')}}" mode="editor"></x-editor>
                </div>

              </div>
            </div>

          </div>
          <div class="nav-jump">
            <a href="#policy" class="jump btn btn-secondary"> <i class="ft-arrow-down"></i> </a>
          </div>
        </div>



        <div class="card">
          <div id="policy" class="card-header">
            <h4 class="card-title">{{ __('Chính sách bán hàng') }}</h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="screen-block">
              <div class="card-block">
                <div class="form-group row ">
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon">{{__('Giá bán')}} :</span>
                      <input type="number" name="price" class="form-control font-medium-2">
                      <span class="input-group-addon bg-white"> đ </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <fieldset class=" position-relative">
                      <div class="input-group position-relative ">
                        <span class="input-group-addon">{{__('Thưởng Hoa hồng')}} :</span>
                        <input type="number" name="dropship_bonus" placeholder="20" class="form-control font-medium-2">
                        <span class="input-group-addon bg-white"> % {{__('Giá bán')}} </span>
                      </div>
                  </div>
                  </fieldset>
                </div>
                <div class="form-group ">
                  <label>{{__('Mô tả chính sách')}} :</label>
                  <x-editor name="dropship_content" placeholder="{{__('Chính sách bán hàng')}}" mode="editor"></x-editor>
                </div>

              </div>
            </div>

          </div>
          <div class="nav-jump">
            <ul class="nav">
              <li class="nav-item mb-1">
                <a href="#info" class=" jump btn"> <i class="ft-arrow-up"></i> </a>
              </li>
              <li class="nav-item">
                <a href="#gallery" class="jump btn btn-secondary"> <i class="ft-arrow-down"></i> </a>
              </li>
            </ul>


          </div>
        </div>

        <div class="card">
          <div id="gallery" class="card-header">
            <h4 class="card-title">{{ __('Hình ảnh hoặc video') }}</h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="screen-block">
              <div class="card-block row up">
                <div class="col-md-4 action">
                  <div class="note text-xs-center">
                    <p>
                      Chọn hình ảnh gửi lên
                    </p>
                    <p>Hình ảnh có kích thước tối đa : 720x1280</p>
                    <p>Dung lượng tối đa : 200MB </p>

                  </div>

                  <label class="btn btn-primary block round">
                    {{__('Upload File')}}
                    <input type="file" class="none" name="media[]" multiple accept="image/*" />
                  </label>

                </div>
                <div class="col-md-8 thumb">


                </div>

              </div>
            </div>

          </div>
          <div class="nav-jump">


            <ul class="nav">
              <li class="nav-item mb-1">
                <a href="#policy" class="jump btn"> <i class="ft-arrow-up"></i> </a>
              </li>
              <li class="nav-item">
                <a href="#publish" class="jump btn btn-secondary"> <i class="ft-arrow-down"></i> </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="card">
          <div id="publish" class="card-header">
            <h4 class="card-title">{{ __('Xuất bản') }}</h4>

            <div class="heading-elements">
              <a data-action="collapse"><i class="ft-minus"></i></a>
            </div>

          </div>
          <div class="card-body">
            <div class="screen-block">
              <div class="card-block">

                <div class="form-group ">

                  <div class="row">

                    <div class="col-md-4">
                      <label>{{__(' Thời gian bắt đầu ')}} :</label>
                      <input type="date" name="dropship_start_at" class="form-control">
                    </div>

                    <div class="col-md-4">
                      <label>{{__(' Thời gian kết thúc ')}} :</label>
                      <input type="date" class="form-control">
                    </div>
                    <div class="col-md-4">
                      <label>{{__(' Giới hạn số lượng ')}} :</label>
                      <input type="number" placeholder="{{__('Không giới hạn')}}" name="dropship_limit" class="form-control">

                    </div>
                  </div>

                </div>




                <div class="card-footer">
                  <div class="float-xs-right  row">
                    <ul class="nav navbar-nav">
                      <li class="nav-item">
                        <select style="width: 200px;" class="form-control pull-left">
                          @foreach(config('dropship.status') as $key => $value )
                          <option value="{{$key}}"> {{__($value)}}</option>
                          @endforeach


                        </select>
                      </li>
                      <li class="nav-item">
                        <button class="btn btn-primary">{{__('Tạo mới')}}</button>
                      </li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="nav-jump">
            <a href="#policy" class="jump btn btn-secondary"> <i class="ft-arrow-up"></i> </a>
          </div>

        </div>
      </div>



    </div>


  </x-form>
</x-block>
@endsection

<x-layout.admin />