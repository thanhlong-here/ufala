@section('title')
<div class="content-header-left col-md-6 col-xs-12 mb-1">
    <h3 class="content-header-title">
        {{ Theme::title("post") }}

    </h3>
</div>
@endsection

@section('content')

<div class="content-body">
    <div class="card">
        <div class="card-block">
            <div id="table" class="table-responsive">
                <table class="table">
                    <thead>
                        <th style="width:2rem">

                        </th>

                        <th style="width:12rem">
                            {{ Theme::title('code') }}
                        </th>
                        <th style="width:2rem">
                            {{ Theme::title('priority') }}
                        </th>
                        <th>
                            {{ Theme::title('name') }}
                        </th>
                        <th style="width:2rem">
                            <button class="btn btn-sm  btn-primary" 
                                onclick=" modal_src('{{route('posts.create')}}')" >
                                <i class="ft ft-plus"> </i>
                                {{__('Create') }}
                            </button>
                        </th>
                    </thead>
                    <tbody>

                        @foreach ($list as $row)
                        <tr>
                            <th>
                                <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i>
                                </button>

                            </th>

                            <td>
                                <button 
                                    onclick=" modal_src('modal-src','{{route('posts.edit',$row)}}') " 
                                    class="btn btn-sm btn-icon btn-primary">
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
                                <span class="tag tag tag-pill tag-success float-xs-right">
                                    <a target="_blank" href="{{ url($row->link->pretty) }}">
                                        #Preview
                                    </a>
                                </span>
                            </td>
                        </tr>
                        @push('outer')
                        <x-modal.delete :row="$row" action="posts.destroy" />
                        @endpush
                        @endforeach
                    </tbody>

                    @push('outer')
                    <x-modal class="modal-xl h-100" id="modal-create">
                        <iframe class="w-100 h-100" loading="lazy" src="{{route('posts.create')}}"></iframe>
                    </x-modal>
                    @endpush
                </table>
                <div class="pull-right">
                    {{$list->appends(request()->input())->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<x-layout.back />