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
                                    {% if deptlang.logotext %}
                                    <img style="margin-left: auto; margin-right: auto;" src="{{ helper.getLinkImage(deptlang.logotext) }}" alt="{{ deptlang.title }}">
                                    {% else %}
                                    <h3 class="title text-default">{{deptlang.title}}</h3>
                                    {% endif %}
                                </a>
                            </div>
                        </div>
                    </div>
                    {%for menu in menuParents%}
                    <div class="col-lg-3">
                        <div class="footer-content">
                            <h4 class="title text-default">{% if menu.icon %}<i class="fa {{ menu.icon }} pr-10"></i> {% endif %} <?= Menus::getLName($menu->id, $langid) ?></h4>
                            <?php $menuChild = Menus::find(['parentid = :parentid:','bind' => ['parentid' => $menu->id]]); ?>
                            {% if menuChild.count() %}
                            <nav class="mb-20">
                                <ul class="nav flex-column list-style-icons">
                                    {% for child in menuChild %}
                                    <li class="nav-item"><a class="nav-link" rel="noopener" target="{{ helper.getTarget(menu.target)}}" href="<?= Menus::getLink($child) ?>"><i class="fa fa-chevron-circle-right"></i><?= Menus::getLName($child->id, $langid) ?></a></li>
                                    {% endfor %}
                                </ul>
                            </nav>
                            {% endif %}
                        </div>
                    </div>
                    {%endfor%}
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter default-bg">
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">{{ml._ml('copyright', 'Bản quyền © 2023 Khoa Vật Lý - Vật Lý Kỹ Thuật.')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>