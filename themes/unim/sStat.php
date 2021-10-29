<?php
$arParams = [
    'statistic_title_block' => 'statistic_title_block',
    'links_statistic_block' => 'links_statistic_block',
];
$arResult = getParamsOptions($arParams);
?>
<section class="sStat section" id="sStat">
    <div class="container">
        <div class="section-title text-center">
            <h3><?= $arResult['statistic_title_block'] ?></h3>
        </div>
        <ul>
            <? foreach ($arResult['links_statistic_block'] as $item): ?>
                <?if (empty($item['name_statistic_links'])) continue; ?>
                <li><?= $item['name_statistic_links'] ?></li>
            <? endforeach; ?>
        </ul>
    </div>
</section>
