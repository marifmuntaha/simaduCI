<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
    <div class="sidebar-content">
        <div class="sidebar-section sidebar-user my-1">
            <div class="sidebar-section-body">
                <div class="media">
                    <a href="#" class="mr-3">
                        <img src="<?= isset($user) ? $user->image : null?>" class="rounded-circle" alt="">
                    </a>
                    <div class="media-body">
                        <div class="font-weight-semibold"><?= isset($user) ? $user->fullname : null ?></div>
                        <div class="font-size-sm line-height-sm opacity-50"><?= isset($user) ? $user->role : null ?></div>
                    </div>
                    <div class="ml-3 align-self-center">
                        <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                            <i class="icon-transmission"></i>
                        </button>

                        <button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                            <i class="icon-cross2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php include "mainmenu.php" ?>
    </div>
</div>