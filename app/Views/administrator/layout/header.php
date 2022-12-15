<div class="page-header page-header-light">
    <div class="page-header-content d-sm-flex">
        <div class="page-title">
            <h4><span class="font-weight-semibold"><?=isset($title) ? $title : null?></span> - <?= isset($setting) ? $setting->app_name : null ?></h4>
        </div>
    </div>
    <div class="breadcrumb-line breadcrumb-line-light header-elements-sm-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <?php for($i=0;$i<count($breadcrumb);$i++){ ?>
                <a href="<?=$breadcrumb[$i]->link?>" class="breadcrumb-item <?=isset($breadcrumb[$i]->status)?$breadcrumb[$i]->status : null?>">
                    <?=isset($breadcrumb[$i]->icon) ? "<i class='".$breadcrumb[$i]->icon."'></i>" : null ?> <?=$breadcrumb[$i]->name?>
                </a>
                <?php } ?>
            </div>
            <a href="#" class="header-elements-toggle text-body d-sm-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>