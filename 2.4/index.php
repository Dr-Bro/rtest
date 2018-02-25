<?php 
AddEventHandler("search", "BeforeIndex", "BeforeIndexHandler");  
function BeforeIndexHandler($arFields) {
    if (CModule::IncludeModule('iblock') && $arFields["MODULE_ID"] == 'iblock'){
      $dbElement = CIblockElement::GetByID($arFields["ITEM_ID"]);
      if ($arElement = $dbElement->Fetch()){
         foreach ($arDelFields as $value) {
            if (isset ($arElement[$value]) && strlen($arElement[$value])> 0){        
               $arFields["BODY"] = str_replace ($arElement[$value], "", $arFields["BODY"]);       
            }          
         }             
      }             
      return $arFields;       
   } 
   } 
?>
