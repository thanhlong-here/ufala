@section('content')
<x-form action="{{ route('blocks.store') }}" enctype="multipart/form-data">
  <div class="form-body">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">New Block</h4>
        </div>

        <div class="card-block">
          <div class="form-group text-xs-center">
            <x-temp class="img-fluid" style="height:200px" />
          </div>
          <div class="form-group">
            <div class="input-group ">
              <span class="input-group-addon">Link</span>
              <input type="text" name="link" placeholder="link" class="form-control" value="{{ old('link') }}" aria-describedby="basic-addon1">
            </div>
          </div>

          <div class="form-group">
            <input type="text" value="{{ old('title') }}" class="form-control" placeholder="title" name="title" />
          </div>

          <div class="form-group pt-1">
            <x-editor mode="editor" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 sticky-header">
      <div class="card">
        <div class="card-block">
          <div class="form-group">
            <input type="text" value="{{ old('type') }}" class="form-control" placeholder="Type" name="type" />
          </div>

          <div class="form-group">
            <input type="text" value="{{ old('code') }}" class="form-control" placeholder="Code" name="code" />
          </div>

          <div class="form-group">
            <div class="input-group ">
              <span class="input-group-addon">Priority</span>
              <input type="number" name="priority" class="form-control" value="{{ old('priority') ? old('priority') : 0   }}" aria-describedby="basic-addon1">
            </div>
          </div>


        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
</x-form>
@endsection
<x-layout.wiget id="modal_src" />