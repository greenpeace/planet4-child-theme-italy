<?php
/*
 * Creates the italian cellular phone mask for phone inputs
 */ 

 function gpbr_add_italian_phone_mask_gf($phone_formats)
 {
     $phone_formats['br'] = array(
         'label' => 'Numero cellulare italiano',
         // 'mask' => '(+39)999-999-9999',
         'mask' => '9999999999',
         // 'regex' => '/^(32[^15]|33[^20]|34[0-9]|35[^2-46-9]|36[^45790]|37[^6]|38[^125-7]|39[^4-689])(\d){5,7}/g',
         'regex' => '\+39-[1-9]{3}-[1-9]{7}',
         'error_message_setting' => 'Numero cellulare non valido'
        );
     return $phone_formats;
 }
 
 add_filter('gform_phone_formats', 'gpbr_add_italian_phone_mask_gf', 10, 2);