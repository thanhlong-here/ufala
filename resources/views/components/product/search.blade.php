@props([
'prefix' => null
])
@php
$find = "product_$prefix";
$search = (new App\Classes\Search($find))->get();
$choices= empty($search->categories) ? [] : $search->categories;
$name = empty($search->name) ? '' : $search->name;
$list = empty($prefix) ? App\Models\Category::root()->wherePrefix('product')->get() : App\Models\Category::root()->wherePrefix('product_'.$prefix)->get();
@endphp

<x-form class="form" action="{{route('search.find',$find)}}">

  <div class="row">
    <label class="text-bold-600 col-md-4">{{__('Từ khóa cần tìm')}}: </label>
    <label class="text-bold-600 col-md-3">{{__('Danh mục')}}: </label>
    <label class="text-bold-600 col-md-3">{{__('Trạng thái')}}: </label>

  </div>

  <div class="row">
    <div class="col-md-4">
      <fieldset class="form-group position-relative has-icon-left">
        <input type="text" value="{{$name}}" name="name" placeholder="{{__('Từ khóa')}} ..." class="form-control round" />
        <div class="form-control-position">
          <i class="ft-search primary"></i>
        </div>
      </fieldset>
    </div>
    <div class="col-md-3">
    
      <x-select.multi class="form-control round" :choices="$choices" :list="$list" name="categories[]" />
    </div>
    <div class="col-md-3">
   
      <select name="status" class="form-control round">
        <option value=''>{{__('Tất cả')}}</option>
        <option value='news'>{{__('Sản phẩm mới')}}</option>
        <option value='hot'>{{__('Sản phẩm hot')}}</option>
      </select>
    </div>

    <div class="col-md-2">

      <button class="btn round block"> {{__('Tìm kiếm') }}</button>
    </div>


  </div>



</x-form>