<?php
$arParams = [
    'title_about_block' => 'title_about_block',
    'slider_about_block' => 'slider_about_block',
    'text_about_sldier_block' => 'text_about_sldier_block',
    'text_block_description' => 'text_block_description',
];
$arResult = getParamsOptions($arParams);
?>


<section class="sContent section" id="sContent">
    <div class="container">
        <div class="section-title text-center">
            <h2><?=$arResult['title_about_block']?></h2>
        </div>

        <?if(!empty($arResult['slider_about_block'])):?>
        <div class="sContent__slider sContent__slider--js swiper-container">
            <div class="swiper-wrapper">
                <?foreach ($arResult['slider_about_block'] as $item):?>
                <div class="swiper-slide">

                        <a href="<?=$item['photo_slider_about_item']?>" data-fancybox="photo">
                            <picture>
                                <img class="swiper-lazy" src="#" data-src="<?=$item['photo_slider_about_item']?>" alt=""/>
                            </picture>
                        </a>
                </div>
                <?endforeach;?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <?endif;?>


        <div class="sContent__block">
            <p><?=$arResult['text_about_sldier_block']?></p>
        </div>
        <div class="text-center">
            <h3><?=$arResult['text_block_description']['title_list_about_group']?></h3>
        </div>
        <ul>
            <?foreach ($arResult['text_block_description']['list_group_about_block'] as $item):?>
                 <?
                    if(empty($item['name_list_group_block'])) continue;
                ?>
                <li><?=$item['name_list_group_block']?></li>
            <?endforeach;?>

        </ul>

        <div class="row">
            <div class="col-lg-6 order-lg-last">
                <?if(!empty($arResult['text_block_description']['image_block_about_last'])):?>
                <div class="sContent__imgWrap">
                    <a href="<?=$arResult['text_block_description']['image_block_about_last']?>" data-fancybox="office">
                        <picture>
                            <source srcset="<?=$arResult['text_block_description']['image_block_about_last']?>" type="image/webp"/>
                            <noscript class="loading-lazy"><img src="<?=$arResult['text_block_description']['image_block_about_last']?>" loading="lazy" alt=""/></noscript>
                        </picture>
                       </a>
                </div>
                <?endif;?>
            </div>
            <div class="col-lg-6">
                <?foreach ($arResult['text_block_description']['test_list_about_last'] as $item):?>
                <h3><?=$item['pobt_title']?></h3>
                <ul>
                    <?foreach ($item['povt_group_list'] as $value):?>
                    <?
                            if(empty($value['povt_list_name_ul'])) continue;
                        ?>
                        <li><?=$value['povt_list_name_ul']?></li>
                    <?endforeach;?>
                </ul>
                <?endforeach;?>

            </div>
        </div>
    </div>
</section>