@props([
'action'=>'posts.update',
'post' => new App\Models\Post,
'title'=> 'Chỉnh sửa bài viết'
])
<x-form class="form" method="{{$post->id ? 'PUT' :'POST' }}" enctype="multipart/form-data" action="{{ route($action,$post) }}">
  <div style="z-index: 99; top:0" class="fixed block ">
    <div class="p-1 bg-white shadow">
      <div class="row">
        <div class="col-md-4">
          <ul class="nav navbar-nav">

            <li class="nav-item">

              <button type="button" class="close-parent black close"> <i class="ft-arrow-left"></i></button>
            </li>
            <li class="nav-item">
              <h4>{{ $title }} </h4>
            </li>
          </ul>

        </div>
        <div class="col-md-8">

          <ul class="pull-right nav navbar-nav">
            <li class="nav-item">
              <input class="form-control" name="code" placeholder="{{__('Mã gợi nhớ')}}" value="{{ $post->code }}" />
            </li>
            <li class="nav-item">

            <x-select.categories name="category_id" class="form-control" selected="{{ $post->category_id }}" />
            </li>
            <li class="nav-item">

            <x-select.status />
            </li>
            <li class="nav-item">
              <button id="btn_send" type="submit" class="btn btn-primary">
                {{__('Gửi thông tin')}}
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-2 container">



    <div class="col-md-8">
      <div class="form-group">
        <input type="text" placeholder="{{__('Tiêu đề bài viết')}}" class="form-control" value="{{ $post->name }}" name="name" />

      </div>
      <div class="form-group card">
        <x-editor mode="editor">{!!$post->content!!}</x-editor>
      </div>
    </div>
    <div class="col-xs-4">
      
      <div class="card box">
        <div class="card-header">
          <h4 class="card-title">{{ __('Hình đại diện') }}</h4>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="card-body collapse in text-xs-center">
          @if(empty($Post->avatar))
          <x-temp class="img-fluid" style="height:120px" />
          @else
          {{$Post->avatar->src}}
          <x-temp class="img-fluid" src="{{ asset($Post->avatar->src) }}" style="height:120px" />
          @endif

        </div>
      </div>

      <div class="card box">
        <div class="card-header">
          <h4 class="card-title">{{ __('Tối ưu SEO') }}</h4>

          <div class="heading-elements">
            <a data-action="collapse"><i class="ft-minus"></i></a>
          </div>

        </div>
        <div class="card-body collapse">
          <div class="card-block">

            <div class="form-group row">
              <label class="label-control">{{ __('Meta title') }} </label>
              <input class="form-control" name="meta_title" value="{{ $post->meta_title }}" />
            </div>
            <div class="form-group row">
              <label class="label-control">{{ __('Meta keyword') }} </label>
              <input class="form-control" name="meta_title" value="{{ $post->meta_keyword }}" />
            </div>

            <div class="form-group row">
              <label class="label-control">{{ __('Meta description') }} </label>
              <textarea class="form-control" name="meta description">{{ $post->meta_description }}</textarea>
            </div>
          </div>
        </div>
      </div>

    </div>

</x-form>