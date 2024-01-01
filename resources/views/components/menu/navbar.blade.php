<div class="navbar-header container-fluid shadow mb-1">
    <div class="pull-left">
        <a class="close  font-large-2" href="{{route('home')}}"><i class="ft ft-x-circle"></i></a>
    </div>
    <div class="pull-right">
        @auth
        <button type="button" class="btn btn-icon">
            <i class="icon-heart"></i>
        </button>
        <button type="button" data-toggle="modal" data-target="#modal-share" class="btn btn-icon">
            <i class="icon-share"></i>
        </button>
        @else 
       
        <button type="button" class="btn btn-icon btn-primary">
            <i class="icon-present"></i>
        </button>
        <button type="button" class="btn btn-icon">
            <i class="icon-heart"></i>
        </button>
        <button type="button" data-toggle="modal" data-target="#modal-share" class="btn btn-icon">
            <i class="icon-share"></i>
        </button>
        @endauth
    </div>
</div>
