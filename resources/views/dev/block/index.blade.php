@section('title')
<div class="content-header">
  <h4 class="content-header-title">{{ Theme::title('Block') }}</h4>
</div>
@endsection

@section('content')

<div class="card">
  <div class="card-block">
    <div id="table" class="table-responsive">
      <table class="table">
        <thead>
          <th>
            <button type="button" class="btn btn-sm  btn-primary" onclick="modal_src('{{ route('blocks.create') }}')">
              <i class="ft ft-plus"> </i>
              {{__('Create') }}
            </button>

          </th>
          <th>
            {{Theme::title('type')}}
          </th>
          <th>
            {{Theme::title('code')}}
          </th>
          <th>
            {{Theme::title('title')}}
          </th>

        </thead>

        <tbody>
          @foreach ($list as $row)
          @push('outer')
          @include('com.modalDrop',[
          'target' => "modal-delete-$row->id",
          'title' => $row->code,
          'route' => route('blocks.destroy',$row)
          ])
          @endpush
          <tr>
            <th>
              <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>

              <button onclick="if_src('{{ route('blocks.edit',$row) }}')" class="btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>

            </th>
            <td>
              {{ $row->type }}
            </td>
            <td>
              {{ $row->code }}
            </td>
            <td>
              {{ $row->title }}
            </td>

          </tr>
          @endforeach
        </tbody>

      </table>

      <div class="pull-right">
        {{ $list->appends(request()->input())->render() }}
      </div>
    </div>
  </div>
</div>
@endsection
<x-layout.back />