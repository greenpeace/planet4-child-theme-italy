<?php
/*
 * Creates the italian cellular phone mask for phone inputs
 */ 

 function gpbr_add_italian_phone_mask_gf($phone_formats)
 {
     $phone_formats['br'] = array(
         'label' => 'Numero cellulare italiano',
         'mask' => '99-99999-9999',
         'regex' => '/^(32[^15]|33[^20]|34[0-9]|35[^2-46-9]|36[^45790]|37[^6]|38[^125-7]|39[^4-689])(\d){5,7}/g',
         'error_message_setting' => 'errore'
        );
     return $phone_formats;
 }
 
 add_filter('gform_phone_formats', 'gpbr_add_italian_phone_mask_gf', 10, 2);