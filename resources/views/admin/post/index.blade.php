@section('content')

<div class="content-wrapper">
    <x-block class="content-header row mb-1">

        <div class="content-header-left col-md-6">
            <h3 class="content-header-title">
                {{ __('Danh sách bài viết') }}

            </h3>
        </div>
      
        <div class="content-header-right col-md-6">
            <div class="pull-right">
              

                <button data-src="{{$xlink->categories}}" class="widget btn mr-1">
                    <i class="ft-grid"> </i>

                    {{__('Nhóm sản phẩm') }}
                </button>
               
                <button data-src="{{$xlink->create}}" class="widget btn  btn-primary">
                    <i class="ft-plus"> </i>

                    {{__('Viết bài mới') }}
                </button>
            </div>
        </div>
    </x-block>
    <x-block class="content-body">
        <div class="card">
            <div class="card-block">

                <div class="mb-2">
                    <x-post.search prefix="{{$prefix}}" />
                </div>

                <div id="table" class="table-responsive">

                    <table class="table">
                        <thead>
                            <th style="width:2rem">

                            </th>

                            <th style="width:12rem">
                                {{ __('Mã bài viết') }}
                            </th>
                            <th style="width:2rem">
                                {{ __('Ưu tiên') }}
                            </th>
                            <th>
                                {{ __('Tiêu đề') }}
                            </th>

                            <th>
                                {{ __('Danh mục') }}
                            </th>

                        </thead>
                        <tbody>

                            @foreach ($list as $row)
                            @php
                            $edit=route('posts.edit',$row);
                            @endphp
                            @push('outer')
                            <x-modal.delete :row="$row" action="posts.destroy" />
                            @endpush
                            <tr>
                                <th>
                                    <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i>
                                    </button>

                                </th>

                                <td>
                                    <button data-src="{{$edit}}" class="widget btn btn-sm btn-icon btn-primary">
                                        <i class="ft ft-edit"></i>
                                    </button>
                                    {{ $row->code }}
                                </td>
                                <td>
                                    {{ $row->priority }}
                                </td>
                                <td>
                                    {{ $row->name }}
                                </td>

                                <td>

                                    {{ $row->category->name ?? '' }}
                                </td>

                            </tr>

                            @endforeach
                        </tbody>


                    </table>
                    <div class="pull-right">
                        {{$list->appends(request()->input())->render()}}
                    </div>
                </div>
            </div>
        </div>
    </x-block>
</div>
@endsection

<x-layout.admin />