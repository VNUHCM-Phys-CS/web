<?php
namespace Backend\Modules\Admins\Forms;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Textarea;
use Phalcon\Forms\Form;

class HomesLangForm extends Form
{
    public function initialize($entity = null, $lang = null)
    {
        $szedtitle = new Text('szedtitle');
        $szedtitle->setLabel('Tiêu đề');
        $attr = [
            'class' => 'form-control form-control-sm',
            'placeholder' => 'Ví du: ',
            'maxlength' => "255",
            'required' => '',
            'data-required-error' => "Vui lòng nhập tiêu đề",
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'szedtitle');
        $szedtitle->setAttributes($attr);
        $this->add($szedtitle);


        $stafftitle = new Text('stafftitle');
        $stafftitle->setLabel('Tiêu đề');
        $attr = [
            'class' => 'form-control form-control-sm',
            'placeholder' => 'Ví du: Lãnh đạo',
            'maxlength' => "255",
            'required' => '',
            'data-required-error' => "Vui lòng nhập tiêu đề",
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'stafftitle');
        $stafftitle->setAttributes($attr);
        $this->add($stafftitle);

        $staffdes = new Textarea('staffdes');
        $staffdes->setLabel('Tiêu đề');
        $attr = [
            'class' => 'form-control form-control-sm',
            'placeholder' => 'Ví du: Thông tin lãnh đạo',
            'maxlength' => "255",
            'rows' => 4,
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'staffdes');
        $staffdes->setAttributes($attr);
        $this->add($staffdes);

        $partnertitle = new Text('partnertitle');
        $partnertitle->setLabel('Tiêu đề');
        $attr = [
            'class' => 'form-control form-control-sm',
            'placeholder' => 'Ví du: ',
            'maxlength' => "255",
            'required' => '',
            'data-required-error' => "Vui lòng nhập tiêu đề",
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'partnertitle');
        $partnertitle->setAttributes($attr);
        $this->add($partnertitle);


        $partnerdes = new Textarea('partnerdes');
        $partnerdes->setLabel('Tiêu đề');
        $attr = [
            'class' => 'form-control form-control-sm',
            'placeholder' => 'Ví du: Liên kết thông tin',
            'maxlength' => "255",
            'rows' => 4,
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'partnerdes');
        $partnerdes->setAttributes($attr);
        $this->add($partnerdes);

        $contacttitle = new Text('contacttitle');
        $contacttitle->setLabel('Tiêu đề');
        $attr = [
            'class' => 'form-control form-control-sm',
            'placeholder' => 'Ví du: Liên hệ',
            'maxlength' => "255",
            'required' => '',
            'data-required-error' => "Vui lòng nhập tiêu đề",
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'contacttitle');
        $contacttitle->setAttributes($attr);
        $this->add($contacttitle);

        $contactdes = new Textarea('contactdes');
        $contactdes->setLabel('Tiêu đề');
        $attr = [
            'class' => 'form-control form-control-sm',
            'placeholder' => 'Ví du: Liên hệ thông tin',
            'maxlength' => "255",
            'rows' => 4,
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'contactdes');
        $contactdes->setAttributes($attr);
        $this->add($contactdes);

        $video1 = new Textarea('video1');
        $video1->setLabel('Video 1');
        $attr = [
            'class' => 'form-control form-control-sm deseditor',
            'placeholder' => 'Ví du: <iframe width="100%" height="300" src="https://www.youtube.com/embed/KA6QH-rit5Q"></iframe>',
            'rows' => 4,
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'video1');
        $video1->setAttributes($attr);
        $this->add($video1);

        $vdtitle = new Text('vdtitle');
        $vdtitle->setLabel('Tiêu đề');
        $attr = [
            'class' => 'form-control form-control-sm',
            'placeholder' => 'Ví du: VIDEO',
            'maxlength' => "255",
            'required' => '',
            'data-required-error' => "Vui lòng nhập tiêu đề",
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'vdtitle');
        $vdtitle->setAttributes($attr);
        $this->add($vdtitle);

        $video2 = new Textarea('video2');
        $video2->setLabel('Video 2');
        $attr = [
            'class' => 'form-control form-control-sm deseditor',
            'placeholder' => 'Ví du: <iframe width="100%" height="300" src="https://www.youtube.com/embed/KA6QH-rit5Q"></iframe>',
            'rows' => 4,
            'data-error' => "Thông tin chưa hợp lệ"
        ];
        $attr = cFL($attr,$lang,'video2');
        $video2->setAttributes($attr);
        $this->add($video2);
    }
}
