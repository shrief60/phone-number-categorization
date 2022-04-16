<?php
namespace App\Services\phoneValidation;

class CameroonPhoneNumberStatus extends CountryPhoneNumberStatus
{

   public static  function validatePhoneNumber($phone)
   {
      $pattern = "/\(237\)\ ?[2368]\d{7,8}$/";
      return  preg_match($pattern, $phone) ? "OOK" : "NOK";
   }

}