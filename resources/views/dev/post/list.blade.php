<div id="table" class="table-responsive">
  <table class="table">
    <thead>
      <th style="width:2rem">
        <button type="button" onclick="if_src('{{
            route('posts.create',['category' => $category ])
          }}')"
          class="btn btn-sm  btn-primary">
        <i class="ft ft-plus"> </i>
          {{__('Create') }}
        </button>


      </th>
      @if(request('category'))
        <th style="width:4rem">
          {{ Theme::title('category')  }}
        </th>
      @endif
        <th>
          {{ Theme::title('title')  }}
        </th>


        <th style="width:2rem">
          {{ Theme::title('status')  }}
        </th>
    </thead>

    <tbody>

      @foreach ($list as $row)
          @push('outer')
              <div class="modal fade" id="modal-delete-{{$row->id}}"
                tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form  action="{{ route('posts.destroy',$row) }}"
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

            <button onclick="if_src('{{
                route('posts.edit',[$row,'category'=>$category])
              }}')"
            class="btn btn-sm btn-icon btn-info"><i class="ft ft-edit"></i></button>

            <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}"
            class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>


          </td>
          @if(request('category'))
          <td>
            @if($row->category)
                {{  $row->category->name }}
            @endif
          </td>
          @endif
          <td>
                <div class="font-medium-1">

                    {{ (request('type') ==  'page') ? Theme::title($row->name) : $row->name }}
                </div>
                <small>
                <span>{{ __('at') }} :</span>
                {{  $row->created_at }}
              </small>
          </td>

          <td>
            <span class="pill">
              {{  $row->status }}
            </span>
          </td>


        </tr>
      @endforeach
    </tbody>

  </table>

  <div class="pull-right">
    {{$list->render()}}

  </div>
</div>
