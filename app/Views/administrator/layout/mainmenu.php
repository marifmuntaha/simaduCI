<div class="sidebar-section">
    <ul class="nav nav-sidebar" data-nav-type="accordion">
        <li class="nav-item">
            <a href="<?= base_url('administrator')?>" class="nav-link <?= isset($title) == 'Beranda' ? 'active' : null?>">
                <i class="icon-display"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
            <a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Master Data</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Master Data">
                <li class="nav-item"><a href="layout_no_header.html" class="nav-link">No header</a></li>
                <li class="nav-item"><a href="layout_no_footer.html" class="nav-link">No footer</a></li>
                <li class="nav-item-divider"></li>
                <li class="nav-item"><a href="layout_fixed_header.html" class="nav-link">Fixed header</a></li>
                <li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
                <li class="nav-item-divider"></li>
                <li class="nav-item"><a href="layout_2_sidebars_1_side.html" class="nav-link">2 sidebars on 1 side</a></li>
                <li class="nav-item"><a href="layout_2_sidebars_2_sides.html" class="nav-link">2 sidebars on 2 sides</a></li>
                <li class="nav-item"><a href="layout_3_sidebars.html" class="nav-link">3 sidebars</a></li>
                <li class="nav-item-divider"></li>
                <li class="nav-item"><a href="layout_boxed_page.html" class="nav-link">Boxed page</a></li>
                <li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
            </ul>
        </li>

    </ul>
</div>