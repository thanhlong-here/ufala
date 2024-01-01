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

<x-form class="form row" action="{{route('search.find',$find)}}">
    <div class="col-md-3">
        <fieldset class="form-group position-relative has-icon-left">
            <input class="form-control" type="text" name="name" placeholder="nhập tên landing page">
            <div class="form-control-position">
                <i class="fa fa-search"></i>
            </div>
        </fieldset>
    </div>
    <div class="col-md-2">
        <x-select.status></x-select.status>
    </div>
    <div class="col-md-4">
        <x-datepicker.picker></x-datepicker.picker>

    </div>


</x-form>
