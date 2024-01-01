<div class="modal fade" id="modal-delete-{{$row->id}}"tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form  action="{{ route('block.destroy',$row) }}"
            method="post">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>

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
