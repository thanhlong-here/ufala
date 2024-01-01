@props([
'block',
'post',
'action' => 'update',
])
@php

if( isset($post)){
    $url =route('editor.block.add',$post);
}
else if( $action == 'update'){
    $url = route('editor.block.update',$block);
    $data =json_decode($block->data);
}
else{
    $url = route('editor.block.after',$block);
}


$id = uniqid('editor_');
@endphp
<div class="modal-content h-100">

    <x-form action="{{$url}}">
      

        <div class="row">
            <div class="col-xs-9">
                <x-editor id="{{$id}}" required name="content">{{$data->content ?? '' }} </x-editor>

            </div>
            <div class="col-xs-3">
                <div class="pull-right p-2">
                    
                    <button type="button" data-dismiss="modal"  class='close font-large-2'>
                        <i class='ft ft-x-circle'></i></button>
                </div>
                <div class="p-2">
                    <div class="form-group">
                       
                        <input class="form-control" value="{{ $data->class ?? '' }}" type="text" placeholder="Class" name="class"></input>
                    </div>
                    <div class="form-group">
                       
                        <textarea class="form-control" value="{{ $data->style ?? '' }}" placeholder="Style" rows="8" name="style"></textarea>
                    </div>
                    <div class="form-group">

                        <label class="custom-control custom-radio">
                            <input name="fluid" type="checkbox" {{ isset($data->fluid) ? 'checked' : '' }} name="container-fluid" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description"> Container-fluid </span>
                        </label>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">{{__('Save')}}</button>
                    </div>
                </div>
            </div>

        </div>
    </x-form>
</div>

@push('script')
<script>

    $('.note-editable').height(480);

</script>
@endpush