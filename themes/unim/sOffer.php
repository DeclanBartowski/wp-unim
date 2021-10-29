<?php
$arParams = [
    'offer_title_block' => 'offer_title_block',
    'block_link_group' => 'block_link_group',
];
$arResult = getParamsOptions($arParams);
?>
<section class="sOffer section" id="sOffer">
    <div class="container">
        <div class="section-title text-center">
            <h3><?= $arResult['offer_title_block'] ?></h3>
        </div>
        <div class="row">
            <? foreach ($arResult['block_link_group'] as $value): ?>
                <? if (empty($value['offers_links_name'])) continue;
                ?>
                <div class="col-md-6">
                    <div class="sOffer__item"><?= $value['offers_links_name'] ?>
                    </div>
                </div>
            <? endforeach; ?>

        </div>
    </div>
</section>
