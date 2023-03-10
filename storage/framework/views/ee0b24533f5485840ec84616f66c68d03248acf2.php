<?php $__env->startSection('dashboard-form-content'); ?>
    <!-- Main Employee Content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="box-title"> Dashboard</h4>

                    </div>
                    <div class="col-sm-4">
                        <div class="panel-body">
                            <?php if(session('status')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            You are logged in as <?php echo e(Auth::user()->name); ?>

                        </div>
                        
                            
                            
                        
                    </div>
                </div> <!--.row -->
            </div><!--end .box-header -->
        </div><!--end of .box -->
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>