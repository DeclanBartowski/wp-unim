<?php
$arParams = [
    'titile_links_footer' => 'titile_links_footer',
    'links_footer_block' => 'links_footer_block',
];
$arResult = getParamsOptions($arParams);
?>
<section class="sLinks section" id="sLinks">
    <div class="container">
        <div class="section-title text-center">
            <h2><?=$arResult['titile_links_footer']?></h2>
        </div>
        <div class="row">
            <?foreach ($arResult['links_footer_block'] as $item):
                if(empty($item['links_footer_name'])) continue;
                ?>
                <div class="col-sm-6 col-lg">
                    <a target="_blank" class="sLinks__link" href="<?=$item['url_links']?>"><?=$item['links_footer_name']?></a>
                </div>
            <?endforeach;?>

        </div>
    </div>
</section>