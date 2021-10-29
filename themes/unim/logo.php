<?php
$arParams = [
    'background_main_item' => 'logo',
];
$arResult = getParamsOptions($arParams);

?>
<?if(!empty($arResult['logo'])):?>
<picture class="picture-bg">
    <source srcset="<?=$arResult['logo']?>" type="image/webp"/>
    <noscript class="loading-lazy"><img class="object-fit-js" src="<?=$arResult['logo']?>" loading="lazy" alt=""/></noscript>
</picture>
<?endif;?>