<x-form action="{{ route('categories.store') }}">
    <input type="hidden" name="parent_id" value="{{$id}}" />
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-road2"></i>{{__('Create')}}</h4>
    </div>
    <div class="modal-body">
        <div class="card-block">
            <div class="text-xs-center">
                <x-temp class="img-fluid" style="height:200px" />
            </div>
            <div class="row">
                <div class="col-md-2">
                    <input type="number" value="0" class="form-control" name="priority" id="priority" />
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="{{__('code')}}" 
                        value="{{ old('code') }}"
                        class="form-control" name="code" id="code" />
                </div>

                <div class="col-md-6">
                    <input type="text" 
                        value="{{old('name')}}"
                        placeholder="{{__('category name')}}" class="form-control" name="name" id="name" />
                </div>
            </div>

            <div class="form-group mt-1">
                <textarea class="form-control" placeholder="description" name="description" id="description">{!!old('description')!!}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">

        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-outline-primary">Save</button>
    </div>
</x-form>

