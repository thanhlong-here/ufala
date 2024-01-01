@props([
'id'=> 0,
'prefix'=>null,
'action'=>'categories.update',
'title' =>'Chỉnh sửa danh mục',
'category' => new App\Models\Category])

<x-form enctype="multipart/form-data" method="{{$category->id ? 'PUT' :'POST' }}" action="{{ route($action,$category) }}">
    <input type="hidden" name="parent_id" value="{{$id}}" />
    <input type="hidden" name="prefix" class="form-control" value="{{$prefix}}" />

    <div class="modal-header">
        <div class="pull-left">
            <ul class="nav navbar-nav">

                <li class="nav-item">

                    <button type="button" data-dismiss="modal" class="black close"> <i class="ft-arrow-left"></i></button>
                </li>
                <li class="nav-item">
                    <h4>{{ $title }} </h4>
                </li>
            </ul>
        </div>

        <div class="pull-right">

            <button type="submit" class="btn btn-primary">{{__('Cập nhật')}}</button>
            <button type="reset" class="btn grey btn-outline-secondary">{{__('Làm lại')}}</button>
        </div>
    </div>
    <div class="modal-body">
        <div class="card-block">

            <div class="row">
                <div class="col-xs-5 box">
                    @if(empty($category->avatar))
                    <x-temp class="img-fluid" />
                    @else
                    {{$category->avatar->src}}
                    <x-temp class="img-fluid" src="{{ asset($category->avatar->src) }}" style="height:120px" />
                    @endif
                </div>
                <div class="col-xs-7">

                    <div class="form-group">

                        <div class="input-group ">
                            <span class="input-group-addon">{{__('Tên danh mục')}}</span>
                            <input type="text" value="{{$category->name}}" placeholder="{{ __('Tên danh mục') }}" class="form-control" name="name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">{{ __('Mã danh mục') }} :</span>
                            <input type="text" placeholder="{{ __('Mã danh mục') }}" value="{{$category->code}}" class="form-control" name="code" id="code" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">{{__('Mức độ ưu tiên')}}</span>
                            <input type="number" name="priority" placeholder="{{__('Mức độ ưu tiên')}}" class="form-control" value="{{ empty($category->priority) ? 0 : $category->priority   }}">
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="description" name="description" id="description">{{$category->description}}</textarea>
            </div>
        </div>
    </div>

</x-form>