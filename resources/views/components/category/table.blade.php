@props([
'list',
'item' => null,
'prefix'=>null,
])
@php
$path= empty($prefix) ? "categories.index" :"categories.prefix";
@endphp
@push('outer')
<x-modal id="modal-create">
    <div class="modal-content">
        <x-category.edit title="new category" id="{{isset($item) ? $item->id : 0}}" prefix="{{$prefix}}" action="categories.store" />
    </div>
</x-modal>
@endpush
<div class="mb-2">
    <x-category.search prefix="{{$prefix}}" />
</div>
<div id="table" class="table-responsive">
    <table class="table">
        <thead>
            <th style="width:2rem">
                @if($item)
                <a class="btn btn-sm btn-icon btn-info" href="{{ route($path,[$item->parent->prefix ?? $prefix,'id' => $item->parent_id]) }}">
                    <i class="icon-action-undo"></i>
                </a>
                @endif
            </th>
            <th></th>
            <th>
                {{ __('Mã danh mục') }}
            </th>
           
            <th style="width:2rem">
                {{ __('Độ ưu tiên') }}
            </th>
            <th>
                {{ __('Tên danh mục') }}
            </th>
            <th style="width:2rem">
                <button class="btn btn-sm  btn-primary" data-backdrop="false" data-toggle="modal" data-target="#modal-create">
                    <i class="ft ft-plus"> </i>
                    {{__('Thêm danh mục mới') }}
                </button>
            </th>
        </thead>
        <tbody>

            @foreach ($list as $row)
            <tr>
                <th>

                    @if($row->childs()->count() == 0)

                    <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i>
                    </button>
                    @endif

                </th>

                <td>
                    <a class="btn btn-sm btn-icon btn-info " href="{{ route($path,[$row->prefix,'id'=>$row->id]) }}">
                        <i class="ft ft-grid"></i>
                    </a>
                    <button data-toggle="modal" data-backdrop="false" data-target="#modal-edit-{{$row->id}}" class="btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i>
                    </button>

                </td>
                <td>
                    <div>{{ $row->code }} </div>
                    <span class="tag tag tag-pill tag-info">
                       {{ $row->prefix }}
                    </span>
                    <ul class="nav">
                        @foreach($row->extensions() as $ext)
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route($path,[$ext->prefix,'id'=>$row->id]) }}">
                                <i class="ft ft-plus-circle"></i>{{ $ext->prefix }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    {{ $row->priority }}
                </td>
                <td>
                    {{ $row->name }}
                </td>
                <td>
                    <span class="tag tag tag-pill tag-success float-xs-right">
                        <a target="_blank" >
                            #Preview
                        </a>
                    </span>
                </td>
            </tr>
            @push('outer')
            <x-modal.delete :row="$row" action="categories.destroy" />

            <x-modal id="modal-edit-{{$row->id}}">

                <div class="modal-content">
                    <x-category.edit :category="$row" id="{{ isset($item) ? $item->id : 0}}" prefix="{{$row->prefix}}" />
                </div>
            </x-modal>
            @endpush
            @endforeach
        </tbody>


    </table>
    <div class="pull-right">
        {{$list->appends(request()->input())->render()}}
    </div>
</div>