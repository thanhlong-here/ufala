<?php
  $roles  = ['editor','shop','manager','admin'];
?>
<div id="table" class="table-responsive">
  <table class="table">
    <thead>
      <th>
      <?php if(request('is','admin') == 'admin'): ?>
              <button
              type="button" class="btn btn-sm  btn-primary"
              data-backdrop="false"
              data-toggle="modal" data-target="#modal-create" >
              <i class="ft ft-plus"> </i>
                <?php echo e(__('Create')); ?>

              </button>
        <?php $__env->startPush('outer'); ?>
            <div class="modal fade" id="modal-create"
              tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form class="form" action="<?php echo e(route('users.store')); ?>"
                      method="post">
                      <?php if(request('is') == 'admin'): ?>
                            <input name="is_admin" type="hidden" value="1" >
                      <?php endif; ?>
                      <?php echo csrf_field(); ?>
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-road2"></i> Create Account</h4>
                        </div>

                        <div class="modal-body">


                              <div class="form-body">
                                <div class="form-group">
                                  <label><?php echo e(__('Tên')); ?></label>
                                  <input type="name"
                                  class="form-control"
                                  name="name" id="name" />
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="email"
                                  class="form-control"
                                  name="email" id="email" />
                                </div>
                                <div class="form-group">
                                  <label>Password</label>
                                  <input type="password"
                                  class="form-control"
                                  name="password" id="password" />
                                </div>
                                <div class="form-group">
                                  <label><?php echo e(__('Nhập lại mật khẩu')); ?></label>
                                  <input id="password-confirm" type="password"
                                  class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                              </div>

                        </div>
                        <div class="modal-footer">
                          <?php if(  request('is') == 'admin'): ?>
                            <select name="admin_role">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($role); ?>">
                                       <?php echo e($role); ?>

                                  </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          <?php endif; ?>
                          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-outline-primary">Accept</button>
                         </div>


                     </form>
                  </div>
              </div>
            </div>
        <?php $__env->stopPush(); ?>
      <?php endif; ?>
      </th>
        <?php $__currentLoopData = $cols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <th>
              <?php echo e(Str::title($col)); ?>

          </th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </thead>

    <tbody>

      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
          <td>
            <button data-toggle="modal" data-target="#modal-delete-<?php echo e($row->id); ?>"
            class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>

            <button
            data-toggle="modal" data-target="#modal-edit-<?php echo e($row->id); ?>"
            class="btn btn-sm btn-icon btn-info"><i class="ft ft-edit"></i></button>


            <?php $__env->startPush('outer'); ?>
                <div class="modal fade" id="modal-delete-<?php echo e($row->id); ?>"
                  tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form  action="<?php echo e(route('users.destroy',$row)); ?>"
                          method="post">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-road2"></i> <?php echo e($row->name); ?></h4>
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
                             <?php echo method_field('DELETE'); ?>
                             <?php echo csrf_field(); ?>
                         </form>
                      </div>
                  </div>
                </div>

                <div class="modal fade" id="modal-edit-<?php echo e($row->id); ?>"
                  tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form class="form" action="<?php echo e(route('users.update',$row)); ?>"
                          method="post">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('PUT'); ?>
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-road2"></i> Edit Account</h4>
                            </div>

                            <div class="modal-body">


                                  <div class="form-body">
                                    <div class="form-group">
                                      <label><?php echo e(Str::title(__('label.name'))); ?></label>
                                      <input type="name" value="<?php echo e($row->name); ?>"
                                      class="form-control"
                                      name="name" id="name-<?php echo e($row->id); ?>" />
                                    </div>
                                    <div class="form-group">
                                      <label><?php echo e(Str::title(__('label.email'))); ?></label>
                                      <input type="email" value="<?php echo e($row->email); ?>"
                                      class="form-control"
                                      name="email" id="email-<?php echo e($row->id); ?>" />
                                    </div>
                                    <div class="form-group">
                                      <label><?php echo e(Str::title(__('label.password'))); ?></label>
                                      <input type="password"
                                      class="form-control"
                                      name="password" id="password-<?php echo e($row->id); ?>" />
                                    </div>
                                    <div class="form-group">
                                      <label><?php echo e(Str::title(__('label.password_confirmation'))); ?></label>
                                      <input id="password-confirm-<?php echo e($row->id); ?>" type="password"
                                      class="form-control" name="password_confirmation" autocomplete="new-password">
                                    </div>



                                  </div>

                            </div>
                            <div class="modal-footer">
                              <?php
                                  $cr = empty($row->admin_role) ? 'admin' : $row->admin_role;
                              ?>
                              <?php if(  request('is') == 'admin'): ?>
                                <select  name="admin_role">
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option <?php echo e(($role==$cr) ? 'selected' :''); ?> value="<?php echo e($role); ?>">
                                            <?php echo e($role); ?>

                                      </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                              <?php endif; ?>
                              <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-outline-primary">Accept</button>
                             </div>


                         </form>
                      </div>
                  </div>
                </div>
            <?php $__env->stopPush(); ?>
          </td>
          <?php $__currentLoopData = $cols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
                <?php echo e($row->$col); ?>



            </td>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

  </table>

  <div class="pull-right">
    <?php echo e($list->render()); ?>


  </div>
</div>
<?php /**PATH D:\www\ufala\resources\views/dev/user/list.blade.php ENDPATH**/ ?>