@push('css')
<link href="{{asset('theme/css/home.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/plugins/ui/dragula.min.css')}}">

@endpush
@php

$back = (url()->current() == url()->previous()) ? route('home') : url()->previous(); 
@endphp
@section('body')
<x-block style="z-index: 9;" class="fixed w-100">
  <div class="navbar-header bg-white container-fluid  pt-1 pb-1 shadow mb-2">
    <div class="pull-left">
      <a class="close font-large-1" href="{{ $back }}"><i class="ft ft-arrow-left"></i></a>
    </div>
    <div class="pull-right">

      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-publish"> {{__('Publish')}} </button>

    </div>
  </div>
</x-block>

<x-block id="html" style="padding-top:5.2rem;" class="w-100 ">
 
  <x-editor.blocks :post="$wp" />
</x-block>
@endsection

@push('outer')
  <x-modal id="modal-publish" class="modal-md">
      <div class="modal-content">
        <x-form class="form" action="{{route('landing.publish',$wp)}}" >
        <div class="modal-header">
          <div class="pull-right">
          <button type="type" data-dismiss="modal"   class="btn">{{__('Cancel')}}</button>
        
            <button type="submit" class="btn btn-primary">{{__('Publish')}}</button>
          </div>

        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>{{__('Title')}}</label>
            <input type="text" name="title" class="form-control" value="{{$wp->title}}" placeholder="{{__('Input title')}}" />
          </div>
          <div class="form-group">
           <label>{{__('Description')}}</label>
           <textarea class="form-control" rows="5" name="content">{{$wp->content}}</textarea>
          
          </div>

        
        </div>
        </x-form>
        
      </div>
  </x-modal>
@endpush


<x-layout.simple class="bg-white" />