<?php
namespace App\Services;

use App\Models\Customer;

class CustomerService
{
    public function execute()
    {
        //$users = Customer::paginate(10);
        $users = Customer::all();
        foreach ($users as $key => $user) {
            $seperationData = PhoneNumberService::extractCountryCode($user->phone);
            $countryFactory = CountryFactory::CountryMapperByCountryCode($seperationData['country_code']); 
            $statusClass  = $countryFactory['validator'];

            $user->country_code = $seperationData['country_code'];
            $user->phone_number = $seperationData['phone_number'];
            $user->country = $countryFactory['country'];
            $user->state = $statusClass::validatePhoneNumber($user->phone);
        }
        return $users;
    }
}