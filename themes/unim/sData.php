<?php
$arParams = [
    'links_second_block' => 'links_second_block',
    'text_second_block' => 'text_second_block',
];
$arResult = getParamsOptions($arParams);
?>


<section class="sData section" id="sData">
    <div class="container">
        <div class="sData__links">
            <ul>
                <?foreach ($arResult['links_second_block'] as $value):?>
                <?
                        if(empty($value['second_link_name'])) continue;
                    ?>
                    <li>
                        <div><?=$value['second_link_name']?></div>
                    </li>
                <?endforeach;?>
            </ul>
        </div>
        <div class="section-title text-center">
            <h2><?=$arResult['text_second_block']?></h2>
        </div>
    </div>
</section>
