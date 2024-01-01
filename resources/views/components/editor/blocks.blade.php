@props([
'post'
])

@php

$blocks = $post->blocks->sortBy('priority');

@endphp

<div {{ $attributes }}>
    <x-form action="{{route('editor.block.drag')}}" id="drag-index">
        <div class="drag">
            @foreach( $blocks as $block )
            @php
            $data = json_decode($block->data);
            @endphp
            <div class='editor'>
                <input type="hidden" name="index[]" value="{{$block->id}}" />
                <div class='editor-header'>
                    <div class="block">

                        <div class="pull-left">

                            <button type="button" onclick="block_delete('#form-delete-{{$block->id}}')" class='close font-large-1 mr-1'>
                                <i class='ic icon-trash'></i></button>
                        </div>
                        <div class="pull-right">
                            <div class="mb-1">
                                <button type="button" data-toggle="modal" data-target="#modal-edit-{{$block->id}}" class='btn btn-primary btn-sm btn-icon'>
                                    <i class='ft ft-edit'></i>
                                </button>
                            </div>
                            <button data-toggle="modal" data-target="#modal-add-{{$block->id}}" type="button" class="btn btn-info btn-sm btn-icon">
                                <i class="ft ft-plus-circle"></i>
                            </button>

                        </div>

                    </div>
                </div>
                <div class="editor-content {{ isset($data->fluid) ? 'container-fluid' : 'container' }}">
                    {!! $data->content !!}
                </div>

            </div>

            @push('outer')
            <x-modal id="modal-add-{{$block->id}}" class="modal-xl h-100 mt-0">
                <x-editor.editblock :block='$block' action="after" />
            </x-modal>
            <x-modal id="modal-edit-{{$block->id}}" class="modal-xl h-100 mt-0">
                <x-editor.editblock :block='$block' />
            </x-modal>
            <x-form id="form-delete-{{$block->id}}" method="DELETE" action="{{route('blocks.destroy',$block)}}">
            </x-form>
            @endpush
            @endforeach
            @if($blocks->count() == 0)
            <div class='editor mb-2' data-toggle="modal" data-target="#modal-create">
                <div class='editor-content'>
                    <label class="label-editor font-large-1">{{__('Input something')}}</label>
                </div>

            </div>
            @push('outer')

            <x-modal id="modal-create" class="modal-xl  mt-0">
                <x-editor.editblock :post='$post' />
            </x-modal>

            @endpush
            @endif
        </div>
    </x-form>
</div>

@once
@push('block-css')
<style>
    .label-editor {
        text-shadow: 0 1px 0 #fff;
        opacity: .2;
    }

    .editor {
        z-index: 9;
        margin-left: 2.4rem;
        margin-right: 2.4rem;
    }

    .editor:hover {
        border: solid 1px #fcc43b;

        min-height:10rem;

    }

    .editor:hover .editor-content {
        opacity: .5;
    }

    .editor:hover .editor-header {
     
        display: block;
    }

    .editor-header {

      display: none;
    }

    
    .editor-header .pull-left {
        margin-top: 5rem;
        margin-left: -2.4rem;
    }
    .editor-header .pull-right {
        margin-right: -2.4rem;
        margin-top: 5rem;
    }
</style>
@endpush

@push('block-script')
<script src="{{ asset('theme/js/extensions/dragula.min.js') }}" type="text/javascript"></script>
<script>
    dragula(Array.from(document.querySelectorAll('.drag'))).on('drop', function(el, target, source, sibling) {
        $("#drag-index").submit();
    });



    function block_delete(form_id) {
        $(form_id).submit();
    }
</script>
@endpush
@endonce


@push('css')
@stack('block-css')
@endpush

@push('script')
@stack('block-script')
@endpush