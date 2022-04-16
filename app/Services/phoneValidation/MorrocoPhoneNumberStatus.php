<?php
namespace App\Services\phoneValidation;

class MorrocoPhoneNumberStatus extends CountryPhoneNumberStatus
{

   public static function validatePhoneNumber($phone)
   {
      $pattern = "/\(212\)\ ?[5-9]\d{8}$/";
      return  preg_match($pattern, $phone) ? "OOK" : "NOK";
   }

}