<?php
$arParams = [
    'forms_settings' => 'forms_settings',
    'title_form_back' => 'title_form_back',
    'btn_name_send_form' => 'btn_name_send_form',
    'politic_forms' => 'politic_forms',
];
$arResult = getParamsOptions($arParams);
?>
<section class="sForm section" id="sForm">
    <div class="container">
        <div class="section-title text-center">
            <h2><?=$arResult['title_form_back']?></h2>
        </div>
        <div class="form-wrap">
            <form method="post" action="">

                <input type="hidden" name="action" value="sendF">
                <?
                    foreach ($arResult['forms_settings'] as $item) {
                        switch ($item['type_form_input']) {
                            case 'input':
                                ?>
                                <div class="form-wrap__input-wrap form-group">
                                    <label>
                                        <span class="form-wrap__title"><?=$item['name_form_name']?></span>
                                        <input class="form-wrap__input form-control" type="text" <?if($item['required_input']):?> required <?endif;?> placeholder="" name="<?=$item['translatable']?>"/>
                                    </label>
                                </div>
                                <?
                                break;
                            case 'textarea':

                                ?>

                                <div class="form-wrap__textareaWrap">
                                    <div class="form-wrap__input-wrap form-group">
                                        <label>
                                            <span class="form-wrap__title"><?=$item['name_form_name']?></span>
                                            <textarea class="form-wrap__input form-control" <?if($item['required_input']):?> required <?endif;?> placeholder="" name="<?=$item['translatable']?>"></textarea>
                                        </label>
                                    </div>
                                </div>

                                <?
                                break;

                        }
                    }
                ?>

                <div class="form-group">
                    <label>
                        <input type="checkbox" class="" value="" required readonly checked>
                        <span class=""><?=$arResult['politic_forms']?></span>
                    </label>
                    <br>
                </div>



                <div class="text-center">
                    <button class="form-wrap__btn" type="submit"><?=$arResult['btn_name_send_form']?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>