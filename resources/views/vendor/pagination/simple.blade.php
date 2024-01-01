@if ($paginator->hasPages())
   
    <div class="p-1" style="width:25rem">
     {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
      
            <div class="col-xs-6 pull-right" ><a class="btn btn-block  btn-info" href="{{ $paginator->previousPageUrl() }}" rel="prev">{{__('Lùi lại')}}</a></div>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <div class="col-xs-6 pull-right"><a class="btn btn-block btn-info" href="{{ $paginator->nextPageUrl() }}" rel="next">{{__('Tiếp theo')}}</a></div>
        @endif
      
    </div>
@endif
