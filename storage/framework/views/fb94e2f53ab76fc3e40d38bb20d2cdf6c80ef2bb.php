<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset("/images/mypicture.jpg")); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div><!--end of .user-panel -->

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            

            <li class="active"><a href="<?php echo e(route('home')); ?>"><i class="fa fa-home fa-fw"></i><span>Home</span></a>
            </li>
            <li><a href="<?php echo e(route('home')); ?>"><i class="fa fa-tachometer-alt fa-fw"></i><span>Dashboard</span></a>
            </li>
            <li ><a href="<?php echo e(route('users-mgmnt.index')); ?>"><i
                            class="fa fa-user fa-fw"></i>&nbsp;<span>User Management </span></a>
            </li>

            <li ><a href="<?php echo e(route('employees')); ?>"><i class="fa fa-users fa-fw"></i><span>&nbsp;Employee Management </span></a>
            </li>

            
                
                    
              
            
                
                
                    
                    
                    
                    
                    
                    
                
            
            
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>