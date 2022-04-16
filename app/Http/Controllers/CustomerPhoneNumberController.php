<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Services\CountryFactory;
use App\Services\PhoneNumberService;
use App\Services\CustomerService;
use App\Http\Requests\CustomerPhoneNumberRequest;
use App\Services\phoneValidation\CountryPhoneNumberStatus;
use App\Services\phoneValidation\MorrocoPhoneNumberStatus;

class CustomerPhoneNumberController extends Controller
{
    public $service;
    public function __construct(CustomerService $service)
    {
        $this->service = $service;
    }

    public function index(CustomerPhoneNumberRequest $request)
    {
        $users = $this->service->execute();
        return view('Home', ['users' => $users]);
    }
}
