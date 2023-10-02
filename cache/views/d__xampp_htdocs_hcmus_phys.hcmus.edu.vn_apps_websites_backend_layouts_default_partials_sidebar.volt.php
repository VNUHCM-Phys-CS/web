<aside class="main-sidebar elevation-4 sidebar-light-primary">
    <a href="<?= WEB_ADMIN_URL ?>" class="brand-link">
        <img src="<?= LOGO ?>" alt="<?= DEPT ?>" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-bold text-uppercase text-primary">QUẢN TRỊ THÔNG TIN</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= WEB_ADMIN_URL ?>"
                        class="nav-link <?php if ($this->dispatcher->getControllerName() == 'index' && $this->dispatcher->getActionName() == 'index') { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Bảng điều khiển</p>
                    </a>
                </li>
                <li
                    class="nav-item has-treeview <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['posts', 'categories'])) { ?> <?= 'menu-open' ?> <?php } ?>">
                    <a href="#"
                        class="nav-link <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['posts', 'categories'])) { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Bài viết<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview mt-1">
                        <?php if ($this->master->checkPermission('posts', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/posts"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'posts' && $this->dispatcher->getActionName() == 'index') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tất cả</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('posts', 'update')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/posts/view"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'posts' && $this->dispatcher->getActionName() == 'view') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bài viết mới</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('categories', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/categories"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'categories') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Chuyên mục</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= WEB_ADMIN_URL ?>/pages"
                        class="nav-link <?php if ($this->dispatcher->getControllerName() == 'pages') { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>Trang thông tin</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['subjects', 'classes', 'researches', 'majors'])) { ?> <?= 'menu-open' ?> <?php } ?>">
                    <a href="#"
                        class="nav-link <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['subjects', 'classes', 'researches', 'majors'])) { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Đào tạo
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview mt-1">
                        <?php if ($this->master->checkPermission('classes', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/classes"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'classes') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách lớp</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('subjects', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/subjects"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'subjects') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Môn học</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('researches', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/researches"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'researches') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hướng nghiên cứu</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('majors', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/majors"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'majors') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ngành học</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php if ($this->master->checkPermission('slideshows', 'index')) { ?>
                <li class="nav-item">
                    <a href="<?= WEB_ADMIN_URL ?>/slideshows"
                        class="nav-link <?php if ($this->dispatcher->getControllerName() == 'slideshows') { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-images"></i>
                        <p>Banners</p>
                    </a>
                </li>
                <?php } ?>
                <?php if ($this->master->checkPermission('staffs', 'index')) { ?>
                <li class="nav-item">
                    <a href="<?= WEB_ADMIN_URL ?>/staffs"
                        class="nav-link <?php if ($this->dispatcher->getControllerName() == 'staffs') { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Tổ chức Cán bộ</p>
                    </a>
                </li>
                <?php } ?>
                <?php if ($this->master->checkPermission('partners', 'index')) { ?>
                <li class="nav-item">
                    <a href="<?= WEB_ADMIN_URL ?>/partners"
                        class="nav-link <?php if ($this->dispatcher->getControllerName() == 'partners') { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>Liên kết/ đối tác</p>
                    </a>
                </li>
                <?php } ?>
                <?php if ($this->master->checkPermission('homes', 'index')) { ?>
                <li class="nav-item">
                    <a href="<?= WEB_ADMIN_URL ?>/homes"
                        class="nav-link <?php if ($this->dispatcher->getControllerName() == 'homes') { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="<?= WEB_ADMIN_URL ?>/menus"
                        class="nav-link <?php if ($this->dispatcher->getControllerName() == 'menus') { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>Menus</p>
                    </a>
                </li>
                <li
                    class="nav-item has-treeview <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['options', 'links'])) { ?> <?= 'menu-open' ?> <?php } ?>">
                    <a href="#"
                        class="nav-link <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['options'])) { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Thiết lập chung
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview mt-1">
                        <?php if ($this->master->checkPermission('depts', 'update', 1)) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/options"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'options') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thông tin chung</p>
                            </a>
                        </li>
                        <?php } ?>
                        
                        <?php if ($this->master->checkPermission('links', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/links"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'links') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Links</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['user', 'role', 'setting'])) { ?> <?= 'menu-open' ?> <?php } ?>">
                    <a href="#"
                        class="nav-link <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['user', 'role', 'setting'])) { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Quản trị hệ thống
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview mt-1">
                        <?php if ($this->master->checkPermission('user', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/user"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'user') { ?> <?= 'active' ?> <?php } ?> single">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tài khoản người dùng</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('role', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/role"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'role') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nhóm người dùng</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['logs'])) { ?> <?= 'menu-open' ?> <?php } ?>">
                    <a href="#"
                        class="nav-link <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['logs'])) { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-history"></i>
                        <p>
                            Nhật ký hệ thống
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview mt-1">
                        <?php if ($this->master->checkPermission('logs', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/logs?typeidSearch=4"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'logs' && $this->request->get('typeidSearch') == 4) { ?> <?= 'active' ?> <?php } ?> single">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nhật ký đăng nhập</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('logs', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/logs?typeidSearch=1"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'logs' && ($this->request->get('typeidSearch') == '' || $this->request->get('typeidSearch') == 1)) { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nhật ký thêm mới</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('logs', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/logs?typeidSearch=2"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'logs' && $this->request->get('typeidSearch') == 2) { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nhật ký chỉnh sửa</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('logs', 'index')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/logs?typeidSearch=3"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'logs' && $this->request->get('typeidSearch') == 3) { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nhật ký xóa</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['trashs'])) { ?> <?= 'menu-open' ?> <?php } ?>">
                    <a href="#"
                        class="nav-link <?php if ($this->isIncluded($this->dispatcher->getControllerName(), ['trashs'])) { ?> <?= 'active' ?> <?php } ?>">
                        <i class="nav-icon fas fa-trash-restore"></i>
                        <p> Thùng rác<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview mt-1">
                        <?php if ($this->master->checkPermission('posts', 'delete')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/trashs?type=posts"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'trashs' && $this->request->get('type') == 'posts') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bài viết</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('pages', 'delete')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/trashs?type=pages"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'trashs' && $this->request->get('type') == 'pages') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trang thông tin</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('subjects', 'delete')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/trashs?type=subjects"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'trashs' && $this->request->get('type') == 'subjects') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Môn học</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('researches', 'delete')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/trashs?type=researches"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'trashs' && $this->request->get('type') == 'researches') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hướng nghiên cứu</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('slideshows', 'delete')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/trashs?type=slideshows"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'trashs' && $this->request->get('type') == 'slideshows') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Banners</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('staffs', 'delete')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/trashs?type=staffs"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'trashs' && $this->request->get('type') == 'staffs') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tổ chức Cán bộ</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if ($this->master->checkPermission('partners', 'delete')) { ?>
                        <li class="nav-item">
                            <a href="<?= WEB_ADMIN_URL ?>/trashs?type=partners"
                                class="nav-link <?php if ($this->dispatcher->getControllerName() == 'trashs' && $this->request->get('type') == 'partners') { ?> <?= 'active' ?> <?php } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liên kết/ đối tác</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="btnLogOut" href="#" data-href="<?= WEB_URL ?>/account/logout" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Đăng xuất</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>