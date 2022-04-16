<?php
namespace App\Services\phoneValidation;

abstract class CountryPhoneNumberStatus
{

   public abstract static function validatePhoneNumber($phone);

}