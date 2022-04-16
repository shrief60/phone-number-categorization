<?php
namespace App\Services;

class PhoneNumberService
{
    public static function extractCountryCode($phone_number)
    {
        $parts = explode(" ", $phone_number);
        $country_code_temp = substr($parts[0], 1);
        $country_code =  substr($country_code_temp,0, -1);
        return  ["country_code" => $country_code, "phone_number" => $parts[1]];
    }
}