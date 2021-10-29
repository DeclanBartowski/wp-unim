<?php

$arParams = [
    'contacts_footer' => 'contacts_footer',
];
$arResult = getParamsOptions($arParams);
?>

<section class="sContact section" id="sContact">
    <div class="container">
        <div class="section-title text-center">
            <h2><?=$arResult['contacts_footer']['titile_contacts_footer']?></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="sContact__name"><?=$arResult['contacts_footer']['name_contacts_footer']?>
                </div>
            </div>
            <div class="col-auto"><a class="sContact__mail" href="mailto:<?=$arResult['contacts_footer']['emaiL_contacts_footer']?>"><?=$arResult['contacts_footer']['emaiL_contacts_footer']?></a>
            </div>
        </div>
    </div>
</section>
