<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Текстовая страница");
?><?$APPLICATION->IncludeComponent(
    "bitrix:form.result.new",
    "callback",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "CHAIN_ITEM_LINK" => "",
        "CHAIN_ITEM_TEXT" => "",
        "EDIT_URL" => "result_edit.php",
        "IGNORE_CUSTOM_TEMPLATE" => "N",
        "LIST_URL" => "result_list.php",
        "SEF_MODE" => "N",
        "SUCCESS_URL" => "",
        "USE_EXTENDED_ERRORS" => "N",
        "VARIABLE_ALIASES" => array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID",),
        "WEB_FORM_ID" => "1"
    )
);?><br><? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
