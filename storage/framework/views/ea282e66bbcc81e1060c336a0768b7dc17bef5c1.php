<?php $__env->startSection('employee-form-content'); ?>
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <?php echo e($modify == 1 ? 'Modify Employee' : 'New Employee'); ?>

                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form"
                              action="<?php echo e($modify == 1 ? route('update_employee', ['employee_id' => 1]) : route('create_employee')); ?>"
                              method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Employee Number</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="emp_no" type="text" value="<?php echo e(old('emp_no')); ?>">
                                    <small class="error"><?php echo e($errors->first('emp_no')); ?></small>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-6">
                                    <input name="emp_fname" type="text" value="<?php echo e(old('emp_fname')); ?>">
                                    <small class="error"><?php echo e($errors->first('emp_fname')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-6">
                                    <input name="emp_lname" type="text" value="<?php echo e(old('emp_lname')); ?>">
                                    <small class="error"><?php echo e($errors->first('emp_lname')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input name="emp_email" type="text" value="<?php echo e(old('emp_email')); ?>">
                                    <small class="error"><?php echo e($errors->first('emp_email')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">Photo</label>
                                <div class="col-md-10">
                                    <input id="image" type="file" class="form-control" name="image">
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address</label>
                                <div class="col-md-6">
                                    <input name="emp_address" type="text" value="<?php echo e(old('emp_address')); ?>">
                                    <small class="error"><?php echo e($errors->first('emp_address')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">NPF</label>
                                <div class="col-md-6">
                                    <input name="emp_npf" type="text" value="<?php echo e(old('emp_npf')); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Employee Type</label>
                                <div class="col-md-6">
                                    <select name="emp_type">

                                        <option id="emptype"></option>
                                        <?php $__currentLoopData = $emp_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($emp_type); ?>"><?php echo e($emp_type); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gender</label>
                                <div class="col-md-6">
                                    <select name="emp_gender">
                                        <option id="empgender"></option>
                                        <?php $__currentLoopData = $emp_gender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp_gen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($emp_gen); ?>"><?php echo e($emp_gen); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date Of Birth</label>
                                <div class="col-md-6">
                                    <input name="emp_dob" type="text" class="fa fa-calendar dob" id="datepicker"
                                           value=""
                                           placeholder="&#xf073">
                                    <small class="error"><?php echo e($errors->first('emp_dob')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Martial Status</label>
                                <div class="col-md-6">
                                    <select name="emp_status">
                                        <option id="mstatus"></option>
                                        <?php $__currentLoopData = $emp_mstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp_mstat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($emp_mstat); ?>"><?php echo e($emp_mstat); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <small class="error"><?php echo e($errors->first('emp_mstatus')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Division</label>
                                <div class="col-md-6">
                                    <input name="emp_division" type="text" value="<?php echo e(old('emp_division')); ?>">
                                    <small class="error"><?php echo e($errors->first('emp_division')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Employee Position</label>
                                <div class="col-md-6">
                                    <input name="emp_position" type="text" value="<?php echo e(old('emp_position')); ?>">
                                    <small class="error"><?php echo e($errors->first('emp_position')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <input value="SAVE" class="btn btn-success" type="submit">
                                    <a class=" btn btn-primary" href="<?php echo e(route('employees')); ?>">CANCEL</a>
                                </div>
                            </div>

                        </form>

                    </div>

                </div><!--.panel panel-default -->
            </div><!-- .row -->
        </div><!-- end .container -->
        </section>
        <?php if(Storage::disk('local')->has('emp_fname' . '-' . 'emp_no' . '.jpg')): ?>
        <section class="row">
            <div class="col-md-offset-3">
                <img src="<?php echo e(route('employee.image', ['filename' => 'emp_fname' . '-' . 'emp_no'. '.jpg'] )); ?>" alt="" class="img-responsive">
            </div>
        </section>
        <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('employees.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>