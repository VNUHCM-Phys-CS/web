<form id="frmViews" action="<?= WEB_ADMIN_URI ?>/<?= $cler ?>/update<?= !empty($items->id) ? '/'.$items->id : '' ?>" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= WEB_ADMIN_URL ?>"><i class="fas fa-home"></i></a></li>
                        <?php if (!empty($btitle)) { ?>
                        <li class="breadcrumb-item"><a href="<?= WEB_ADMIN_URL ?>/<?= $cler ?>"><?= $btitle ?></a></li>
                        <?php } ?>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <div class="float-right">
                        <a href="<?= WEB_ADMIN_URI ?>/<?= $cler ?>" class="btn btn-hnn btn-hnn-default" title="Trở về"><span><i class="fas fa-reply"></i></span></a>
                    </div>
                    <?php if ($this->master->checkPermission($cler, 'update', '1')) { ?>
                    <div class="float-right">
                        <button type="submit" class="btn btn-hnn btn-hnn-success mr-2" title="Lưu thông tin"><span>Lưu</span></button>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-12">
            <?= $this->flashSession->output() ?>
        </div>
    </div>
    
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs w-100" role="tablist">
                                    <?php foreach ($languages as $key => $lang) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?= (!$key ? 'active' : '') ?>" href="#lang<?= $lang->id ?>" data-toggle="tab" data-tab="<?= $lang->id ?>">
                                            <?= $lang->name ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <?php foreach ($languages as $key => $lang) { ?>
                            <div class="tab-pane fade <?= (!$key ? 'active show' : '') ?>" id="lang<?= $lang->id ?>">
                                <?php foreach ($formsLang[$lang->id] as $lform) { ?>
                                <?php if ($lform->getUserOption('attr') == 'image') { ?>
                                <div class="card boxImg">
                                    <div class="card-header">
                                        <h3 class="card-title text-primary"><?= $lform->getLabel() ?></h3>
                                    </div>
                                    <div class="card-body <?= !empty($lform->getValue()) ? '' : 'p-0' ?>">
                                        <div class="col-md-12">
                                            <img class="w-100 d-block showImg <?= !empty($lform->getValue()) ? 'h-150px' : 'p-0' ?>" src="<?= !empty($lform->getValue()) ? $lform->getValue() : '' ?>">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <?= $lform->render() ?>
                                        <a href="#" class="link upImage">Tải ảnh</a>
                                        <a href="#" class="rmImage ml-auto link text-danger <?= !empty($lform->getValue()) ? '' : 'hidden' ?>">Xóa</a>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title text-primary"><?= $lform->getLabel() ?> &#151; <?= $lang->name ?></h3>
                                    </div>
                                    <div class="card-body <?= ($lform->getUserOption('attr') == 'editor' ? 'p-0' : '') ?>" >
                                        <div class="row">
                                            <div class="form-group label-floating col-md-12 mt-0 pb-0">
                                                <?= $lform->render() ?>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <?php foreach ($form as $filed) { ?>
                            <?php if ($filed->getUserOption('attr') != 'disabled') { ?>
                                <?php if ($filed->getUserOption('attr') == 'image') { ?>
                                <div class="card boxImg">
                                    <div class="card-header">
                                        <h3 class="card-title text-primary"><?= $filed->getLabel() ?></h3>
                                    </div>
                                    <div class="card-body <?= !empty($items->{$filed->getName()}) ? '' : 'p-0' ?>">
                                        <div class="col-md-12">
                                            <img class="w-100 d-block showImg <?= !empty($items->{$filed->getName()}) ? 'h-150px' : 'p-0' ?>" src="<?= !empty($items->{$filed->getName()}) ? $items->{$filed->getName()} : '' ?>">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <?= $filed->render() ?>
                                        <a href="#" class="link upImage">Tải ảnh</a>
                                        <a href="#" class="rmImage ml-auto link text-danger <?= !empty($items->{$filed->getName()}) ? '' : 'hidden' ?>">Xóa</a>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title text-primary"><?= $filed->getLabel() ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group label-floating col-md-12 mt-0 pb-0">
                                                <?= $filed->render() ?>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <input class="tokenCSRF" type="hidden" name="<?= $this->security->getTokenKey() ?>" value="<?= $this->security->getToken() ?>">
            </div>
        </div>
    </section>
</form>