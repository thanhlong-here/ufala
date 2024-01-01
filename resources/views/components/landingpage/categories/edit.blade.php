@props([
'category'=>0,
'action'=>'ldpcategory.update',
'title' =>__('Chỉnh sửa thông tin Thể loại'),
'prefix' => 'category',
'category' => new App\Models\Category])

@php
$action = $category->id ? route('ldpcategory.update',$category->id) : route('ldpcategory.store');
@endphp
<x-form method="{{$category->id ? 'PUT' :'POST' }}" enctype="multipart/form-data" action="{{ $action }}">
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

    <div class="col-md-12">
      <div class="card">

        <div class="card-block">
          <div class="form-group">

            <input type="text" placeholder="{{__('Tên Danh Mục')}}" class="form-control" value="{{ $category->name }}" name="name" />

          </div>

          <div class="form-group ">

            <x-editor placeholder="{{__('Mô tả Danh Mục')}}" mode="editor">{!!$category->content!!}</x-editor>
          </div>

          <div class="form-group ">
              <x-select.categories name="category_id" class="form-control font-medium-2" prefix="landingpage" selected="{{$category->category_id}}" />
          </div>
        </div>
      </div>

  </div>

  </div>

</x-form>
