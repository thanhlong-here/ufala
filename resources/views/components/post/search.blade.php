@props([
'prefix' => 'post',
])

@php
$search = (new App\Classes\Search($prefix))->get();
$choices= empty($search->categories) ? [] : $search->categories;
$name = empty($search->name) ? '' : $search->name;
@endphp

<x-form class="form row" action="{{route('search.find',$prefix)}}">
  <div class="col-md-4">
    <label class="text-bold-600">{{__('Danh mục cần tìm')}}: </label>

    <x-select.multi class="form-control" :choices="$choices" :list="App\Models\Category::root()->whereNull('prefix')->arrange()" name="categories[]" />
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