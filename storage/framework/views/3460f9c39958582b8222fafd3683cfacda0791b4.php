<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo e(route('home')); ?>"><?php echo e(__('')); ?></a>
        
        <!-- User -->
        
        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="<?php echo e(asset('argon')); ?>/img/theme/team-4-800x800.jpg">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0"><?php echo e(__('Welcome!')); ?></h6>
                    </div>
                    <a href="<?php echo e(route('profile.edit')); ?>" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span><?php echo e(__('Meu perfil')); ?></span>
                    </a>
                    <a href="<?php echo e(route('home')); ?>" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span><?php echo e(__('CRUD')); ?></span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span><?php echo e(__('Logout')); ?></span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- Top navbar -->
<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white"><?php echo e(__('TESTE ZIPP')); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
<?php /**PATH C:\Users\Matheus\Desktop\LaravelSupera\SuperaTeste\resources\views/layouts/navbars/navs/auth.blade.php ENDPATH**/ ?>