<?php 
$menuParents = [];
if($menuLocation = MenuLocation::findFirst(["status =  1 AND deptid = $dept->id AND type = 2"])) {
    $menuParents = Menus::find(["status = 1 AND deptid = $dept->id AND locationid = {$menuLocation->id} AND parentid = 0",'order' => 'sort ASC','limit' => 3]);
}
?>

<footer id="footer" class="clearfix">
    <div class="footer" style="background-color: #eee;">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-content">
                            <div class="media-wrap">
                                <a href="<?php echo WEB_URL ?>/">
                                    <?php if ($deptlang->logotext) { ?>
                                    <img style="margin-left: auto; margin-right: auto;" src="<?= $this->helper->getLinkImage($deptlang->logotext) ?>" alt="<?= $deptlang->title ?>">
                                    <?php } else { ?>
                                    <h3 class="title text-default"><?= $deptlang->title ?></h3>
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($menuParents as $menu) { ?>
                    <div class="col-lg-3">
                        <div class="footer-content">
                            <h4 class="title text-default"><?php if ($menu->icon) { ?><i class="fa <?= $menu->icon ?> pr-10"></i> <?php } ?> <?= Menus::getLName($menu->id, $langid) ?></h4>
                            <?php $menuChild = Menus::find(['parentid = :parentid:','bind' => ['parentid' => $menu->id]]); ?>
                            <?php if ($menuChild->count()) { ?>
                            <nav class="mb-20">
                                <ul class="nav flex-column list-style-icons">
                                    <?php foreach ($menuChild as $child) { ?>
                                    <li class="nav-item"><a class="nav-link" rel="noopener" target="<?= $this->helper->getTarget($menu->target) ?>" href="<?= Menus::getLink($child) ?>"><i class="fa fa-chevron-circle-right"></i><?= Menus::getLName($child->id, $langid) ?></a></li>
                                    <?php } ?>
                                </ul>
                            </nav>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter default-bg">
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">Bản quyền © 2020 Khoa Vật Lý - Vật Lý Kỹ Thuật.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>