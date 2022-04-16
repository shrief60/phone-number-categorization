<?php
namespace App\Services;
use Exception;
use App\Services\phoneValidation\UgandaPhoneNumberStatus;
use App\Services\phoneValidation\MorrocoPhoneNumberStatus;
use App\Services\phoneValidation\CameroonPhoneNumberStatus;
use App\Services\phoneValidation\EthiopiaPhoneNumberStatus;
use App\Services\phoneValidation\MozambiquePhoneNumberStatus;


class CountryFactory
{
    private static $mappingCountries = [
        "212" => ["country" => "Morroco", "validator" => MorrocoPhoneNumberStatus::class],
        "258" => ["country" => "Mozambique", "validator" => MozambiquePhoneNumberStatus::class],
        "251" => ["country" => "Ethiopia", "validator" => EthiopiaPhoneNumberStatus::class],
        "256" => ["country" => "Uganda", "validator" => UgandaPhoneNumberStatus::class],
        "237" => ["country" => "Cameroon", "validator" => CameroonPhoneNumberStatus::class]
    ];

    public function __construct()
    {
        
    }
    public static function CountryMapperByCountryCode($countryCode)
    {
        if (!isset(self::$mappingCountries[$countryCode]))
            throw new Exception("this country is not included");
        return self::$mappingCountries[$countryCode];
    }
}