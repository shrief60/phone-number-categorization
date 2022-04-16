<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomerService;
use App\Http\Requests\CustomerPhoneNumberRequest;

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
