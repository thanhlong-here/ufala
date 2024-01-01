@php
$title = config('app.prefix')[$prefix] ?? 'danh mục';

$title= __('Nhóm '.$title );

@endphp
@section('body')
<x-block class="content-wrapper">
    <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
        <div class="navbar-wrapper">
            <div class="row">
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
                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-create">
                        <i class="ft ft-plus"> </i>
                        {{__('Thêm danh mục mới') }}
                    </button>
                    @push('outer')
                    <x-modal id="modal-create">
                        <div class="modal-content">
                            <x-category.edit title="{{__('Thêm danh mục mới')}}" prefix="{{$prefix}}" action="categories.store" />
                        </div>
                    </x-modal>
                    @endpush

                </div>
            </div>


        </div>

    </nav>



    <div class="pt-2 container">

        <div class="card">
            <div class="card-block">

                <div class="mb-2">
                    <x-category.search prefix="{{$prefix}}" />
                </div>




                <div id="table" class="table-responsive">
                    <table class="table table-choice">
                        <thead>
                            <th style="width:2rem">

                            </th>
                            <th>

                            </th>
                            <th>
                                {{ __('Mã danh mục') }}
                            </th>


                            <th>
                                {{ __('Tên danh mục') }}
                            </th>
                            <th style="width:2rem">
                                {{ __('Độ ưu tiên') }}
                            </th>
                        </thead>
                        <tbody>

                            @foreach ($list as $row)
                            <tr data-id="{{$row->id}}">
                                <th>

                                    @if($row->childs()->count() == 0)

                                    <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i>
                                    </button>
                                    @else
                                    <a class="btn btn-sm btn-icon btn-info " href="{{ route($path,[$prefix,'id'=>$row->id]) }}">
                                        <i class="ft ft-grid"></i>
                                    </a>
                                    @endif

                                </th>

                                <td>

                                    <button data-toggle="modal" data-target="#modal-edit-{{$row->id}}" class="btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i>
                                    </button>

                                </td>
                                <td>
                                    {{ $row->code }}
                                </td>
                                <td>
                                    {{ $row->name }}
                                </td>
                                <td>
                                    {{ $row->priority }}
                                </td>


                            </tr>
                            @push('outer')
                            <x-modal.delete :row="$row" action="categories.destroy" />

                            <x-modal id="modal-edit-{{$row->id}}">

                                <div class="modal-content">
                                    <x-category.edit :category="$row" prefix="{{$prefix}}" />
                                </div>
                            </x-modal>
                            @endpush
                            @endforeach
                        </tbody>

                    </table>
                    <div class="pull-right">
                        {{$list->appends(request()->input())->render('vendor.pagination.simple')}}
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-block>

@endsection

<x-layout.admin />