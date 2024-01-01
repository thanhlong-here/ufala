<table class="table">
    <thead>
    <th style="width: 30%">
        {{__('Thể loại')}}
    </th>
    <th style="width: 20%">

        {{__('Người tạo')}}
    </th>
    <th style="width: 15%">

        {{__('Ngày tạo')}}
    </th>

    <th style="width: 15%">
        <span class="float-xs-right">

            {{__('Trạng thái')}}
        </span>
    </th>
    <th class="text-center" style="width: 20%"> Thao tác </th>

    </thead>
    <tbody>
        @foreach($categories as $cate)
            <tr>
                <td>{{$cate->name}} <br> 
                @if(!empty($cate->parentCategory))
                    <a href=""><span>{{$cate->parentCategory->name}}</span></a> > {{$cate->name}}
                @endif
                </td>
                <td>{{$cate->created_by}}</td>
                <td>{{$cate->created_at}}</td>
                <td><span class="float-xs-right">{{config("status.categories.$cate->status")}}</span></td>
                <td class="text-center">
                    <div>
                        <button data-toggle="modal" data-target="#modal-edit-{{$cate->id}}" class="btn btn-sm btn-icon btn-primary">
                            <i class="ft ft-edit"></i>
                        </button>
                        @if($cate->childs()->count() == 0)
                        <button data-toggle="modal" data-target="#modal-delete-{{$cate->id}}" class="btn btn-sm btn-icon btn-danger">
                            <i class="ft ft-trash"></i>
                        </button>
                        @else
                            <a class="btn btn-sm btn-icon btn-info " href="{{ route('categories.prefix',['landingpage','id'=>$cate->id]) }}">
                                <i class="ft ft-grid"></i>
                            </a>
                        @endif
                    </div>
                </td>
            </tr>
            @push('modal')
            <x-modal.delete :row="$cate" action="categories.destroy" />

            <!-- Modal -->
            <div class="modal fade" id="modal-edit-{{$cate->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-content">
                        <x-category.edit :category="$cate" prefix="landingpage" />
                    </div>
                </div>
                </div>
            </div>
            @endpush
        @endforeach
    </tbody>

</table>

<div class="pull-right">
    {{$categories->render('pagination::bootstrap-4')}}

</div>
@stack('modal')