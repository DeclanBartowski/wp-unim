<?php
$arParams = [
    'btn_header_login' => 'loginBtn',
    'group_menu_links' => 'menu',
    'logo_header' => 'logo',
];
$arResult = getParamsOptions($arParams);


$lang = get_user_locale();

$image = !($lang == 'ru_RU') ? '/wp-content/plugins/qtranslate-x/flags/ru.png'  : '/wp-content/plugins/qtranslate-x/flags/gb.png';
$lang = ($lang == 'ru_RU') ? 'en'  : 'ru';

?>
<div class="top-nav block-with-lazy">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col col-sm-auto">
                <?if(!empty($arResult['logo'])):?>
                    <a class="top-nav__logo" href="<?=get_home_url()?>">
                        <img class="res-i" src="<?=$arResult['logo']?>" alt=""/>
                    </a>
                <?endif;?>
            </div>

            <?if(!empty($arResult["menu"])):?>
            <div class="col col-sm-auto d-none d-lg-block">
                <ul class="navMenu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <?foreach ($arResult["menu"] as $item):
                        if(empty($item['name_menu_links'])) continue;
                        ?>
                    <li class="navMenu__item" itemprop="item">
                        <a class="navMenu__link" href="<?=$item['links_menu']?>" itemprop="url"><?=$item['name_menu_links']?></a>
                    </li>
                    <?endforeach;?>
                    <li class="navMenu__item">
                        <a class="navMenu__link" href="<?=$arResult['loginBtn']['btn_link_header_login']?>"  data-lang="<?=$lang?>">
                                <img draggable="false"

                                     class="emoji" alt="<?=$arResult['loginBtn']['btn_name_header_login']?>" src="<?=$image?>">
                                <?=$arResult['loginBtn']['btn_name_header_login']?>
                        </a>
                    </li>
                </ul>
            </div>
            <?endif;?>
            <?
                if(!empty($arResult["loginBtn"]['btn_name_header_login'])):
            ?>
            <div class="col col-sm-auto">
                <?/*
                     <a class="top-nav__btn" href="<?=$arResult["loginBtn"]['btn_link_header_login']?>"><?=$arResult["loginBtn"]['btn_name_header_login']?></a>
                */?>
            </div>

            <?endif;?>
            <?if(!empty($arResult["menu"])):?>
             <div class="col-auto d-lg-none">
                <div class="toggle-menu-mobile toggle-menu-mobile--js d-lg-none"><span></span>
                </div>
                <div class="menu-mobile menu-mobile--js d-lg-none">
                    <div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
                    </div>
                    <div class="menu-mobile__inner">
                        <ul class="navMenu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                            <?foreach ($arResult["menu"] as $item):
                            if(empty($item['name_menu_links'])) continue;
                            ?>
                                <li class="navMenu__item" itemprop="item">
                                    <a class="navMenu__link" href="<?=$item['links_menu']?>" itemprop="url"><?=$item['name_menu_links']?></a>
                                </li>
                            <?endforeach;?>
                            <li class="navMenu__item">
                                <a class="navMenu__link" href="<?=$arResult['loginBtn']['btn_link_header_login']?>"  data-lang="<?=$lang?>">
                                    <img draggable="false"

                                         class="emoji" alt="<?=$arResult['loginBtn']['btn_name_header_login']?>" src="<?=$image?>">
                                    <?=$arResult['loginBtn']['btn_name_header_login']?>
                                </a>
                            </li>

                        </ul>
                        <div class="text-right"></div>
                    </div>
                </div>
            </div>
            <?endif;?>

        </div>
    </div>
</div>
