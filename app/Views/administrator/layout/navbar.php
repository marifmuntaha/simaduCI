<div class="navbar navbar-expand-lg navbar-dark navbar-static">
    <div class="d-flex flex-1 d-lg-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-paragraph-justify3"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-transmission"></i>
        </button>
    </div>

    <div class="navbar-brand text-center text-lg-left">
        <a href="<?=base_url('administrator')?>" class="d-inline-block">
            <img src="<?=isset($setting) ? $setting->logo : null?>" class="d-none d-sm-block" alt="Logo">
            <img src="<?=isset($setting) ? $setting->logo_icon : null?>" class="d-sm-none" alt="Logo">
        </a>
    </div>

    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
        <span class="badge badge-success my-3 my-lg-0 ml-lg-3">Online</span>
    </div>

    <ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
        <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
            <a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
                <img src="<?=isset($user) ? $user->image : null?>" class="rounded-pill mr-lg-2" height="34" alt="">
                <span class="d-none d-lg-inline-block"><?=isset($user) ? $user->fullname : null?></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="<?=base_url('administrator/profile')?>" class="dropdown-item">Profile</a>
                <div class="dropdown-divider"></div>
                <a href="<?=base_url('administrator/logout')?>" class="dropdown-item">Logout</a>
            </div>
        </li>
    </ul>
</div>
