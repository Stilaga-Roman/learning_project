<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="article-card">
    <div class="article-card__title"><?= $arResult['PROPERTIES']['detail_title']['VALUE'] ?></div>
    <div class="article-card__date"><?= $arResult['PROPERTIES']['date']['VALUE'] ?></div>
    <div class="article-card__content">
        <div class="article-card__image sticky">
            <img
                    src="<?= $arResult['PROPERTIES']["photos"][0]['src'] ?>" alt="" data-object-fit="cover"/>
        </div>
        <div class="article-card__text">
            <div class="block-content" data-anim="anim-3"><p><?= $arResult['PROPERTIES']['description']['VALUE'][0]['TEXT'] ?></p></div>
            <a class="article-card__button" href="/novosti/"><?= $arResult['PROPERTIES']['link']['VALUE'] ?></a></div>
    </div>
</div>
</body>
</html>

