@props([
'prefix' => null
])
@php
$find = "category_$prefix";
$search = (new App\Classes\Search($find))->get();
$choices= empty($search->categories) ? [] : $search->categories;
$name = empty($search->name) ? '' : $search->name;
$list = empty($prefix) ? App\Models\Category::root()->wherePrefix('landingpage')->get() : App\Models\Category::root()->wherePrefix($prefix)->get();
@endphp

<x-form class="form row" action="{{route('search.find',$find)}}">
  <div class="col-md-4">
    <label class="text-bold-600">{{__('Danh mục')}}: </label>
    <x-select.multi class="form-control" :choices="$choices" :list="$list" name="categories[]" />
  </div>

  <div class="col-md-6">
    <label class="text-bold-600">{{__('Từ khóa cần tìm')}}: </label>
    <div class="input-group">
      <input type="text" value="{{$name}}" name="name" placeholder="{{__('Từ khóa')}} ..." class="form-control" />

      <span class="input-group-btn">
        <button class="btn btn-info" type="submit" type="button"><i class="ft ft-search"></i> {{__('Tìm kiếm')}}</button>
      </span>
    </div>

  </div>


</x-form>
