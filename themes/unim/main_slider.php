<?php
$arParams = [
    'grou_main_titles' => 'MainTitles',
    'we_offers_main' => 'offers',
    'more_btn_main_page' => 'btn',
];
$arResult = getParamsOptions($arParams);
?>

<div class="headerBlock section" id="headerBlock">
    <div class="container">
        <div class="headerBlock__inner">
            <? if (!empty($arResult['MainTitles']['title_main'])): ?>
                <div class="section-title">
                    <h1><?= $arResult['MainTitles']['title_main'] ?></h1>
                </div>
            <? endif; ?>
            <? if (!empty($arResult['MainTitles']['title_main_text'])): ?>
                <h3><?= $arResult['MainTitles']['title_main_text'] ?></h3>
            <? endif; ?>

            <? if (!empty($arResult['offers']['list_title_sub'])): ?>
                <div class="headerBlock__listTitle"><?= $arResult['offers']['list_title_sub'] ?></div>
            <? endif; ?>
            <? if (!empty($arResult['offers']['list_main'])): ?>
                <ul>
                    <? foreach ($arResult['offers']['list_main'] as $item):
                        if (empty($item['value_list_main'])) continue;
                        ?>
                        <li><?= $item['value_list_main']; ?></li>
                    <? endforeach; ?>
                </ul>
            <? endif; ?>
        </div>
        <div class="headerBlock__btnWrap">
            <? foreach ($arResult['btn'] as $item):
                if (empty($item['name_btn_main'])) continue;
                ?>
                <a class="<?= $item['class_btn_name'] ?>"
                   href="<?= $item['link_btn_main'] ?>"><?= $item['name_btn_main'] ?></a>
            <? endforeach; ?>
        </div>
    </div>
</div>