<header class="main-header">
    <nav class="navbar navbar-static-top" role="navigation">
        
        
        
        
        
        
        
        
        
        
        
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="<?php echo e(asset("/bower_components/AdminLTE/dist/img/admin.jpg")); ?>" class="user-image"
                             alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo e(Auth::user()->u_fname); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="<?php echo e(asset("/images/mypicture.jpg")); ?>"
                                 class="img-circle" alt="User Image">

                            <p>
                                Hello <?php echo e(Auth::user()->u_fname); ?>

                            </p>
                        </li><!--end .user-header -->

                        <!-- Main Menu Footer -->
                        <li class="user-footer">
                            <?php if(Auth::guest()): ?>
                                <div class="pull-left">
                                    <a href="<?php echo e(route('login')); ?>" class="btn btn-default btn-flat">Login</a>
                                </div>
                            <?php else: ?>
                                <div class="pull-left">
                                    <a href="<?php echo e(url('user-profile')); ?>" class="btn btn-default btn-flat">Profile</a>
                                </div>


                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-lock" aria-hidden="false"></i>&nbsp;Logout
                                    </a>

                                </div>
                            <?php endif; ?>
                        </li><!-- end Main Menu Footer -->
                    </ul><!-- end .dropdown-menu -->
                </li>
            </ul>
        </div><!--end of .navbar-custom-menu -->
    </nav>
</header>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
      style="display: none;">
    <?php echo e(csrf_field()); ?>

</form>
