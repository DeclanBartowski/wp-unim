<?php
$arParams = [
    'research_title_block' => 'research_title_block',
    'research_blocks' => 'research_blocks',
];
$arResult = getParamsOptions($arParams);
?>
<section class="sStudies section" id="sStudies">
    <div class="container">
        <div class="section-title text-center">
            <h2><?= $arResult['research_title_block'] ?></h2>
        </div>
        <div class="row">
            <? foreach ($arResult['research_blocks'] as $value): ?>
                <div class="col-md-6">
                    <div class="sStudies__item">
                        <? if (!empty($value['reseatch_single_picture'])): ?>
                            <picture>
                                <source srcset="<?= $value['reseatch_single_picture'] ?>" type="image/webp"
                                        media="(min-width:576px)"/>
                                <source srcset="<?= $value['reseatch_single_picture'] ?>" type="image/webp"/>
                                <source srcset="<?= $value['reseatch_single_picture'] ?>" type="image/png"
                                        media="(min-width:576px)"/>
                                <source srcset="<?= $value['reseatch_single_picture'] ?>" type="image/png"/>
                                <noscript class="loading-lazy"><img src="<?= $value['reseatch_single_picture'] ?>"
                                                                    loading="lazy" alt=""/></noscript>
                            </picture>
                        <? endif; ?>
                        <div class="sStudies__text">
                            <?= $value['research_single_text'] ?>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>
