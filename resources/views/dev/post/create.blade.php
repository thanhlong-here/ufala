@section('content')

<x-form class="form" enctype="multipart/form-data" action="{{ route('posts.store') }}">

  <div class="form-body">



    <div class="col-md-8">
      <div class="form-group">
        <input type="text" placeholder="" class="form-control input-lg" value=" {{ old('title') }}" name="title" />

      </div>


      <div class="form-group card">
        <x-editor mode="editor">{!!old('content')!!}</x-editor>
      </div>


    </div>
    <div class="col-xs-4">
      <div class="card box">
        <div class="card-header">
          <h4 class="card-title">{{ Theme::title('avatar') }}</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-body collapse in">
          <div class="card-block">
            <div class="form-group text-xs-center">
              <x-temp class="img-fluid" style="max-height:220px" />
            </div>
          </div>

        </div>
      </div>

      <div class="card box">
        <div class="card-header">
          <h4 class="card-title">{{ Theme::title('optimize seo') }}</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-body collapse">
          <div class="card-block">

            <div class="form-group row">
              <label class="label-control">{{ Theme::title('meta title') }} </label>
              <input class="form-control" name="meta_title" value="{{ old('meta_title') }}" />
            </div>
            <div class="form-group row">
              <label class="label-control">{{ Theme::title('meta keyword') }} </label>
              <input class="form-control" name="meta_title" value="{{ old('meta_keyword') }}" />
            </div>

            <div class="form-group row">
              <label class="label-control">{{ Theme::title('meta description') }} </label>
              <textarea class="form-control" name="meta description">{{ old('meta_description') }}</textarea>
            </div>
          </div>
        </div>
      </div>




      @if(isset($categories))
      <div class="card box">
        <div class="card-header">
          <h4 class="card-title">{{ Theme::title('categories') }}</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-body collapse">
          <div class="card-block ">


            <div class="mt-1">
              <div class="form-group">

                <label class="display-inline-block custom-control custom-radio">
                  <input type="radio" checked name="category_id" value="{{ request('category') }}" class="custom-control-input">
                  <span class="bg-success custom-control-indicator"></span>
                  <span class="custom-control-description">
                    {{ Theme::title('no choice') }}
                  </span>
                </label>

              </div>
              @include('dev.master.com.treeCategories')
            </div>


          </div>

        </div>
      </div>
      @endif
      <div class="box card p-1">
        <div class="row mb-1">
          <label class="col-xs-4"> Code :</label>
          <div class="col-xs-8">
            <input class="form-control" name="code" value="{{ old('code') }}" />
          </div>
        </div>
        <div class="row">
          <div class="col-xs-7">
            <select name="status" class="form-control">
              @foreach (['publish','draft'] as $sta)
              <option value="{{ $sta }}">
                {{__('status.'.$sta)}}
              </option>
              @endforeach
            </select>
          </div>
          <div class="col-xs-5 float-xs-right">
            <button type="submit" class="btn btn-block btn-primary mr-1">{{__('Next')}}</button>
          </div>
        </div>
      </div>

    </div>

</x-form>

@endsection

<x-layout.wiget title="{{ Theme::title('create content') }}" id="modal-src" />