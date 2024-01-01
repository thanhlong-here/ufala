
@section('title')

<div class="content-header-left col-md-6 col-xs-12 mb-1">
    <h3 class="content-header-title">
        {{ Theme::title("category") }}
    
    </h3 >

   
</div>
<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
    <div class="breadcrumb-wrapper col-xs-12">
        @if($item)
            <ol class="breadcrumb">
                
                @foreach($item->road() as $i )
                    <li class="breadcrumb-item">
                        <a href="{{ route('categories.index',['id' => $i->id]) }}" >
                        {{ $i->name }}
                        </a>
                    </li>
                @endforeach
                <li class="breadcrumb-item">
                    {{ $item->name }}
                </li>
            </ol>
        @endif
    </div>
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
                        @if($item)
                            <a class="btn btn-sm btn-icon btn-info"
                                 href="{{ route('categories.index',['id' => $item->parent_id]) }}">
                                <i class="icon-action-undo"></i>
                            </a>
                        @endif    
                        </th>
                        
                        <th style="width:12rem">
                            {{ Theme::title('code') }}  
                        </th>
                        <th style="width:2rem" >
                            {{ Theme::title('priority') }}
                        </th>
                        <th>
                            {{ Theme::title('name') }}  
                        </th> 
                        <th style="width:2rem">
                            <button class="btn btn-sm  btn-primary"
                                data-backdrop="false"
                                data-toggle="modal" data-target="#modal-create" >
                                <i class="ft ft-plus"> </i>
                                {{__('Create') }}
                            </button>
                        </th>
                    </thead>
                    <tbody>

                    @foreach ($list as $row)
                        <tr>
                            <th>
                                
                                @if($row->childs()->count())
                                    <a class="btn btn-sm btn-icon btn-info " href="{{ route('categories.index',['id'=>$row->id]) }}">
                                        <i class="ft ft-grid"></i>
                                    </a>
                                @else 
                                    <button 
                                        data-toggle="modal" data-target="#modal-delete-{{$row->id}}"
                                        class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i>
                                    </button>
                                @endif
                               
                            </th>
                            
                            <td>
                                <button data-toggle="modal" data-backdrop="false" data-target="#modal-edit-{{$row->id}}"
                                    class="btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i>
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
                                    <a target="_blank" href="{{ url($row->link->pretty) }}" >
                                        #Preview
                                    </a>
                                </span> 
                            </td>
                        </tr>
                        @push('outer')
                        <x-modal  id="modal-delete-{{$row->id}}" >
                            <div class="modal-content">
                                <x-form method='DELETE'  action="{{ route('categories.destroy',$row) }}" >
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-road2"></i> {{ $row->name }}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            This data will be deleted
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline-primary">Accept</button>
                                    </div>   
                                </x-form>
                            </div>
                        </x-modal>
                        <x-modal  id="modal-edit-{{$row->id}}" >
                            <div class="modal-content">
                                @include('dev.category.edit')
                            </div>    
                        </x-modal>    
                        @endpush        
                    @endforeach
                    </tbody>

                    @push('outer')
                        <x-modal id="modal-create">
                            <div class="modal-content">
                                @include('dev.category.create')
                            </div>    
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