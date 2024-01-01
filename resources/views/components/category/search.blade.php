@props([
  'prefix'  =>   null
])
@php
$find = "category_$prefix";
$search = (new App\Classes\Search("category_$prefix"))->get();
$name = empty($search->name) ? '' : $search->name;

@endphp

<x-form class="form" action="{{route('search.find',$find)}}">
  <div class="row">
   
    <div class="col-md-6">
      <label class="text-bold-600">{{__('Tìm bằng từ khóa')}} : </label>
      <div class="input-group">
        <input type="text" value="{{$name}}" name="name" placeholder="{{__('Từ khóa')}} ..." class="form-control" />

        <span class="input-group-btn">
          <button class="btn btn-info" type="submit" type="button"><i class="ft ft-search"></i> {{__('Tìm kiếm')}}</button>
        </span>
      </div>
    </div>
  </div>
  
  
</x-form>