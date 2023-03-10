<?php $__env->startSection('user-form-content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="box-title">List of users</h3>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary" href="<?php echo e(route('create_user')); ?>">add new user</a>
                    </div>
                </div>
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div><!-- end .box-body -->

                <form method="POST" action="<?php echo e(route('users-mgmnt.search')); ?>">
                    
                    <?php $__env->startComponent('layouts.search', ['title' => 'Search']); ?>

                        <?php $__env->startComponent('layouts.two-cols-search-row', ['attributes' => ['User Name', 'First Name'],
                        'oldvalues' => [isset($searchattributes) ? $searchattributes['user_name'] : '',
                        isset($searchattributes) ? $searchattributes['u_fname'] : '']]); ?>
                        <?php echo $__env->renderComponent(); ?>
                        
                        </br>
                        <?php $__env->startComponent('layouts.two-cols-search-row', ['attributes' => ['Last Name', 'Email'],
                        'oldvalues' => [isset($searchattributes) ? $searchattributes['last_name'] : '',
                        isset($searchattributes) ? $searchattributes['email'] : ''] ]); ?>
                        <?php echo $__env->renderComponent(); ?>
                    <?php echo $__env->renderComponent(); ?>
                    </form>
                
                

                <!--<pre> </pre> -->
                    <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2"
                                            rowspan="1" colspan="1" aria-label="Name: activate to sort column descending"
                                            aria-sort="ascending">User Name
                                        </th>
                                        <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Email: activate to sort column ascending">First Name
                                        </th>
                                        <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Email: activate to sort column ascending">Last Name
                                        </th>
                                        
                                        
                                        
                                        
                                        <th width="20%" class="sorting hidden-xs" tabindex="0" aria-controls="example2"
                                            rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">
                                            Email
                                        </th>
                                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="3"
                                            aria-label="Action: activate to sort column ascending">Modify User Profile
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr role="row" class="odd">
                                            <td class="hidden-xs"><?php echo e($user->user_name); ?></td>
                                            <td class="sorting_1"><?php echo e(($user->u_fname)); ?></td>
                                            <td class="sorting_1"><?php echo e(($user->last_name)); ?></td>
                                            <td class="hidden-xs"><?php echo e($user->u_email); ?></td>
                                            <td>
                                                <form class="row" method="POST"
                                                      action="<?php echo e(route('users-mgmnt.destroy', ['id' => $user->id] )); ?>"
                                                      onsubmit="return confirm('Are you sure')">

                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                                    <a class="btn btn-warning col-sm-3 col-xs-5 btn-margin"
                                                       href="<?php echo e(route('show_user', ['user_id' => $user->id])); ?>">EDIT
                                                    </a>
                                                    <!--<a class="hollow button warning" href="">BOOK A ROOM</a>-->
                                                <?php if($user->user_name != Auth::user()->user_name): ?><!-- check if the current user logged in is the user being deleted -->
                                                    <button type="submit"
                                                            class="btn btn-danger col-sm-3 col-xs-5 btn-margin">
                                                        Delete
                                                    </button>
                                                    <?php endif; ?>

                                                </form>

                                            </td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th width="10%" rowspan="1" colspan="1">User Name</th>
                                        <th width="20%" rowspan="1" colspan="1">First Name</th>
                                        <th width="20%" rowspan="1" colspan="1">Last Name</th>
                                        <th class="hidden-xs" width="20%" rowspan="1" colspan="1">Email</th>
                                        
                                        <th rowspan="1" colspan="2">Modify User Profile</th>
                                    </tr>
                                    </tfoot>
                                </table><!--end of #user-table -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1
                                    to <?php echo e(count($users)); ?> of <?php echo e(count($users)); ?> entries
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    
                                </div>
                            </div>
                        </div>
                    </div><!--end of table-wrapper -->

                </div><!-- box body -->
            </div>
        </section>
        </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('users.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>