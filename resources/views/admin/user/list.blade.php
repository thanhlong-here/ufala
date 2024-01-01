@php
  $roles  = ['editor','shop','manager','admin'];
@endphp
<div id="table" class="table-responsive">
  <table class="table">
    <thead>
      <th>
      @if(request('is','admin') == 'admin')
              <button
              type="button" class="btn btn-sm  btn-primary"
              data-backdrop="false"
              data-toggle="modal" data-target="#modal-create" >
              <i class="ft ft-plus"> </i>
                {{__('Create') }}
              </button>
        @push('outer')
            <div class="modal fade" id="modal-create"
              tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form class="form" action="{{  route('users.store') }}"
                      method="post">
                      @if(request('is') == 'admin')
                            <input name="is_admin" type="hidden" value="1" >
                      @endif
                      @csrf
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-road2"></i> Create Account</h4>
                        </div>

                        <div class="modal-body">


                              <div class="form-body">
                                <div class="form-group">
                                  <label>{{Str::title(__('label.name')) }}</label>
                                  <input type="name"
                                  class="form-control"
                                  name="name" id="name" />
                                </div>
                                <div class="form-group">
                                  <label>{{Str::title(__('label.email')) }}</label>
                                  <input type="email"
                                  class="form-control"
                                  name="email" id="email" />
                                </div>
                                <div class="form-group">
                                  <label>{{Str::title(__('label.password')) }}</label>
                                  <input type="password"
                                  class="form-control"
                                  name="password" id="password" />
                                </div>
                                <div class="form-group">
                                  <label>{{Str::title(__('label.password_confirmation')) }}</label>
                                  <input id="password-confirm" type="password"
                                  class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                              </div>

                        </div>
                        <div class="modal-footer">
                          @if(  request('is') == 'admin')
                            <select name="admin_role">
                                @foreach($roles as $role)
                                  <option value="{{ $role }}">
                                        {{ Theme::title($role) }}
                                  </option>
                                @endforeach
                            </select>
                          @endif
                          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-outline-primary">Accept</button>
                         </div>


                     </form>
                  </div>
              </div>
            </div>
        @endpush
      @endif
      </th>
        @foreach ( $cols as $col )
          <th>
              {{ Str::title($col)  }}
          </th>
        @endforeach

    </thead>

    <tbody>

      @foreach ($list as $row)

        <tr>
          <td>
            <button data-toggle="modal" data-target="#modal-delete-{{$row->id}}"
            class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>

            <button
            data-toggle="modal" data-target="#modal-edit-{{$row->id}}"
            class="btn btn-sm btn-icon btn-info"><i class="ft ft-edit"></i></button>


            @push('outer')
                <div class="modal fade" id="modal-delete-{{$row->id}}"
                  tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form  action="{{ route('users.destroy',$row) }}"
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

                <div class="modal fade" id="modal-edit-{{$row->id}}"
                  tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form class="form" action="{{  route('users.update',$row) }}"
                          method="post">
                          @csrf
                          @method('PUT')
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-road2"></i> Edit Account</h4>
                            </div>

                            <div class="modal-body">


                                  <div class="form-body">
                                    <div class="form-group">
                                      <label>{{Str::title(__('label.name')) }}</label>
                                      <input type="name" value="{{$row->name}}"
                                      class="form-control"
                                      name="name" id="name-{{$row->id}}" />
                                    </div>
                                    <div class="form-group">
                                      <label>{{Str::title(__('label.email')) }}</label>
                                      <input type="email" value="{{$row->email}}"
                                      class="form-control"
                                      name="email" id="email-{{$row->id}}" />
                                    </div>
                                    <div class="form-group">
                                      <label>{{Str::title(__('label.password')) }}</label>
                                      <input type="password"
                                      class="form-control"
                                      name="password" id="password-{{$row->id}}" />
                                    </div>
                                    <div class="form-group">
                                      <label>{{Str::title(__('label.password_confirmation')) }}</label>
                                      <input id="password-confirm-{{$row->id}}" type="password"
                                      class="form-control" name="password_confirmation" autocomplete="new-password">
                                    </div>



                                  </div>

                            </div>
                            <div class="modal-footer">
                              @php
                                  $cr = empty($row->admin_role) ? 'admin' : $row->admin_role;
                              @endphp
                              @if(  request('is') == 'admin')
                                <select  name="admin_role">
                                    @foreach($roles as $role)
                                      <option {{  ($role==$cr) ? 'selected' :'' }} value="{{ $role }}">
                                            {{ Theme::title($role) }}
                                      </option>
                                    @endforeach
                                </select>
                              @endif
                              <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-outline-primary">Accept</button>
                             </div>


                         </form>
                      </div>
                  </div>
                </div>
            @endpush
          </td>
          @foreach ($cols as $col)
            <td>
                {{$row->$col}}


            </td>
          @endforeach


        </tr>
      @endforeach
    </tbody>

  </table>

  <div class="pull-right">
    {{$list->render()}}

  </div>
</div>
