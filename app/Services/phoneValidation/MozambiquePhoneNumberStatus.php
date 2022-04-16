<?php
namespace App\Services\phoneValidation;

class MozambiquePhoneNumberStatus extends CountryPhoneNumberStatus
{

   public static function validatePhoneNumber($phone)
   {
      $pattern = "/\(258\)\ ?[28]\d{7,8}$/";
      return  preg_match($pattern, $phone) ? "OOK" : "NOK";
   }

}