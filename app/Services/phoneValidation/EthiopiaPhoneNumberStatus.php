<?php
namespace App\Services\phoneValidation;

class EthiopiaPhoneNumberStatus extends CountryPhoneNumberStatus
{

   public static function validatePhoneNumber($phone)
   {
      $pattern = "/\(251\)\ ?[1-59]\d{8}$/";
      return  preg_match($pattern, $phone) ? "OOK" : "NOK";
   }

}