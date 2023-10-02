<?php 
    $socials = \Socials::find(["deleted = 0 AND status = 1 AND deptid = {$dept->id}", "order" => "sort ASC"]);
    $links = \Links::find(["deleted = 0 AND status = 1 AND deptid = {$dept->id}", "order" => "sort ASC"]);
    $menuParents = [];
    if($menuLocation = \MenuLocation::findFirst(["status =  1 AND deptid = {$dept->id} AND type = 1"])) {
        $menuParents = \Menus::find(["deleted = 0 AND status = 1 AND deptid = {$dept->id} AND locationid = {$menuLocation->id} AND parentid = 0",'order' => 'sort ASC']);
    }
?>
<div class="header-container">
    <?php if ($socials->count() || $links->count()) { ?>
    <div class="header-top colored">
        <div class="container">
            <div class="row">
                <div class="col-2 col-md-5">
                    <div class="header-top-first clearfix">
                        <ul class="social-links circle small clearfix hidden-sm-down">
                            <?php foreach ($socials as $social) { ?>
                            <li class="<?= $social->name ?>"><a href="<?= $social->link ?>"><i class="fa <?= $social->icon ?>"></i></a></li>
                            <?php } ?>
                        </ul>
                        <div class="social-links hidden-md-up circle small">
                            <div class="btn-group dropdown">
                                <button id="header-top-drop-1" type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></button>
                                <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                                    <?php foreach ($socials as $social) { ?>
                                    <li class="<?= $social->name ?>"><a href="<?= $social->link ?>"><i class="fa <?= $social->icon ?>"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-7 pr-md-0">
                    <div id="header-top-second" class="clearfix text-right">
                        <nav>
                            <ul class="list-inline">
                                <?php foreach ($links as $link) { ?>
                                    <li class="list-inline-item">
                                        <?php if ($link->link) { ?>
                                        <a class="link-light mr-1 " href="<?= $link->link ?>">
                                        <?php } ?>

                                        <?php if ($link->icon) { ?>
                                        <i class="fa <?= $link->icon ?> pr-1"></i>
                                        <?php } ?>

                                        <?= \Links::getLName($link->id, $langid) ?>

                                        <?php if ($link->link) { ?>
                                        </a>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <header class="header fixed fixed-desktop clearfix object-visible">
        <div class="container">
            <div class="d-flex">
                <div class="col-md-auto hidden-md-down pl-md-0">
                    <div class="header-first clearfix p-0 d-flex align-items-center h-100">
                        <div id="logo" class="logo" dept-id = "<?= $dept->id ?>">
                            <a href="<?php echo WEB_URL ?>/<?= ($dept->id != 1 ? $dept->slug : '') ?>">
                                <?php if ($deptlang->logotext) { ?>
                                <img style="height: 60px; margin-left: auto; margin-right: auto;" src="<?= $this->helper->getLinkImage($deptlang->logotext) ?>" alt="<?= $deptlang->title ?>">
                                <?php } else { ?>
                                <h3 class="title text-default mb-0"><?= $dept->dcode ?></h3>
                                <?php } ?>
                            </a>
                        </div>
                        <?php if (!$deptlang->logotext) { ?>
                        <div class="site-slogan font-weight-bold">
                            <?= $deptlang->title ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="ml-lg-auto col-xs-12 p-0">
                    <div class="header-second clearfix">
                        <div class="main-navigation main-navigation--mega-menu  animated">
                            <nav class="navbar navbar-expand-lg navbar-light p-0 d-flex">
                                <div class="navbar-brand clearfix hidden-lg-up">
                                    <div id="logo-mobile" class="logo">
                                        <a href="<?php echo WEB_URL ?>/">
                                            <?php if ($dept->logo) { ?>
                                            <img id="logo-img-mobile" src="<?= $this->helper->getLinkImage($dept->logo) ?>" alt="<?= $deptlang->title ?>">
                                            <?php } else { ?>
                                            <h3 class="title text-default mb-0"><?= $dept->dcode ?></h3>
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <?php if (!$dept->logo) { ?>
                                    <div class="site-slogan logo-font">
                                        <?= $deptlang->title ?>
                                    </div>
                                    <?php } ?>

                                </div>

                                <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="navbar-nav ml-xl-auto">
                                        <?php foreach ($menuParents as $menu) { ?>
                                        <?php $slugNow = isset($slugNow) ? $slugNow : ''; $menuP = \Menus::getItem($menu, $dept->slug, $slugNow); $menuChild = \Menus::find(['deleted = 0 AND parentid = :parentid:','bind' => ['parentid' => $menu->id]]); ?>
                                        <li class="nav-item dropdown <?= ($menuP['actived'] ? 'active' : '') ?>">
                                            <a target="<?= $this->helper->getTarget($menu->target) ?>" rel="noopener" href="<?= $menuP['link'] ?>" class="<?= ($menuP['actived'] ? 'active' : '') ?> nav-link <?= ($menuChild->count() ? 'dropdown-toggle' : '') ?>" <?= ($menuChild->count() ? 'data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : '') ?>><?= \Menus::getLName($menu->id, $langid) ?></a>
                                            <?php if($menuChild->count()){ ?>
                                                <ul class="dropdown-menu">
                                                <?php foreach ($menuChild as $child) { ?>
                                                    <?php $menuItem = \Menus::getItem($child, $dept->slug, $slugNow); ?>
                                                    <li><a target="<?= $this->helper->getTarget($child->target) ?>" rel="noopener" href="<?= $menuItem['link'] ?>" class="<?= ($menuItem['actived'] ? 'active' : '') ?>"><?= \Menus::getLName($child->id, $langid) ?></a></li>
                                                <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-auto hidden-md-down p-0 ml-2">
                    <div class="header-dropdown-buttons" id="langid" data-lang="<?= $langid ?>">
                        <a href="<?= WEB_URL ?>/api/changelanguage/<?= ($langid == 1 ? 2 : 1) ?>" data-id="<?= ($langid == 1 ? 2 : 1) ?>" class="d-flex align-items-center">
                            <img src="<?= WEB_URL ?><?= $language->id == 1 ? '/language_file/eng' : '/language_file/vie' ?>/<?= $language->id == 1 ? 'united-kingdom.png' : 'vietnam.png' ?>" class="user-image" alt="<?= $language->name ?>" style="width: 36px; height: 36px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>