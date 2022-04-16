<?php
namespace App\Services\phoneValidation;

class UgandaPhoneNumberStatus extends CountryPhoneNumberStatus
{

   public static function validatePhoneNumber($phone)
   {
      $pattern = "/\(256\)\ ?\d{9}$/";
      return  preg_match($pattern, $phone) ? "OOK" : "NOK";
   }

}