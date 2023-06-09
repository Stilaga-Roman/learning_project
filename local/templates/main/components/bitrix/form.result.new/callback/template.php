<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<?=$arResult["FORM_NOTE"]?>
<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title"><?= $arResult["FORM_TITLE"]; ?></div>
        <div class="contact-form__head-text"><?= $arResult["FORM_DESCRIPTION"]; ?>
        </div>
    </div>
    <form class="contact-form__form" action="/" method="POST">
        <div class="contact-form__form-inputs">
    <?php foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion): ?>
        <?php if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == "text") { ?>
        <div class="input contact-form__input"><label class="input__label" for="medicine_name">
            <div class="input__label-text"><?= $arQuestion["CAPTION"]; ?></div>
            <input class="input__input" type="text" id="medicine_name" name="medicine_name" value=""
                   required="">
            <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
            </label></div>
            <?php
        } elseif ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == "textarea") { ?>
           </div>
            <div class="contact-form__form-message">
            <div class="input"><label class="input__label" for="medicine_message">
                <div class="input__label-text"><?= $arQuestion["CAPTION"]; ?></div>
                <textarea class="input__input" type="text" id="medicine_message" name="medicine_message"
                          value=""></textarea>
                <div class="input__notification"></div>
            </label></div>
        </div>
    <?php }
        else { ?>
            <div class="input contact-form__input"><label class="input__label" for="medicine_email">
                <div class="input__label-text"><?= $arQuestion["CAPTION"] ?></div>
                <input class="input__input" type="email" id="medicine_email" name="medicine_email" value=""
                       required="">
                <div class="input__notification">Неверный формат почты</div>
            </label></div>
        <?php } endforeach;?>
        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
            <button class="form-button contact-form__bottom-button" data-success="Отправлено"
                    data-error="Ошибка отправки">
                <div class="form-button__title"><?= $arResult["arForm"]["BUTTON"]  ?></div>
            </button>
        </div>
    </form>
</div
