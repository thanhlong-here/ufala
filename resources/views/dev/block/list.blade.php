<div id="table" class="table-responsive">
  <table class="table">
    <thead>
      <th>
        <button type="button" class="btn btn-sm  btn-primary"
        data-backdrop="false"
        data-toggle="modal" data-target="#modal-create" >
        <i class="ft ft-plus"> </i>
          {{__('Create') }}
        </button>

        <div class="modal fade" id="modal-create"
          tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                @include('dev.slider.create')
              </div>
            </div>
        </div>
      </th>
        @foreach ( $cols as $col )
          <th>
              {{ Str::title($col)  }}
          </th>
        @endforeach

    </thead>

    <tbody>

      @foreach ($list as $row)
          @push('outer')
          <div class="modal fade" id="modal-delete-{{$row->id}}"
            tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form  action="{{ route('product_types.destroy',['product_type'=>$row]) }}"
                    method="post">
                      <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-road2"></i> {{ $row->name }}</h4>
                      </div>
                      <div class="modal-body">
                          <p>
                              This data will be deleted
                          </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary">Accept</button>
                       </div>
                       @method('DELETE')
                       @csrf
                   </form>
                </div>
            </div>


          </div>
          @endpush
        <tr>
          <td>
            <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}"
            class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>

            <button data-toggle="modal" data-backdrop="false" data-target="#modal-edit-{{$row->id}}"
            class="btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>

            <div class="modal fade" id="modal-edit-{{$row->id}}"
              tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  @include('dev.slider.edit')
                </div>
              </div>
            </div>

          </td>
          @foreach ($cols as $col)
            <td>
              @switch($col)

                  @case('total')

                      @break

                  @default
                      {{$row->$col}}
              @endswitch


            </td>
          @endforeach


        </tr>
      @endforeach
    </tbody>

  </table>

  <div class="pull-right">
    {{ $list->appends(request()->input())->render() }}

  </div>
</div>
