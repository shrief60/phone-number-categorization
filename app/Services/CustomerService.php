<?php
namespace App\Services;

use App\Models\Customer;
use App\Services\CountryFactory;
use App\Services\PhoneNumberService;
class CustomerService
{
    public function execute()
    {
        //$users = Customer::paginate(10);
        $users = Customer::all();
        foreach ($users as $key => $user) {
            $CountryData = PhoneNumberService::extractCountryCode($user->phone);
            $countryFactory = CountryFactory::CountryMapperByCountryCode($CountryData['country_code']); 
            $statusClass  = $countryFactory['validator'];

            $user->country_code = $CountryData['country_code'];
            $user->phone_number = $CountryData['phone_number'];
            $user->country = $countryFactory['country'];
            $user->state = $statusClass::validatePhoneNumber($user->phone);
        }
        return $users;
    }
}