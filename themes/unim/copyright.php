<?php

$arParams = [
    'copyright_footer' => 'copyright_footer',
];
$arResult = getParamsOptions($arParams);
?>

<footer class="footer block-with-lazy">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-auto">
                <div class="footer__text"><?=$arResult['copyright_footer']["copyright_text"]?>
                </div>
            </div>
            <div class="col-sm-auto">
                <div class="footer__text"><?=$arResult['copyright_footer']["rules_copyright"]?>
                </div>
            </div>
            <div class="col-sm-auto">
                <div class="footer__text"><?=$arResult['copyright_footer']["develop_copyright"]?>
                </div>
            </div>
        </div>
    </div>
</footer>
