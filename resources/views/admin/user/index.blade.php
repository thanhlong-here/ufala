
@section('title')
<h4>{{ Str::title(__("label.user")) }}</h4>

@endsection

@section('content')

<div class="card">
  <div class="card-block">
      @include('dev.user.list',[
            'list' => $list,
            'cols' => ['name','email','phone','created_at']
        ])
    </div>
</div>
@endsection

<x-layout.back />