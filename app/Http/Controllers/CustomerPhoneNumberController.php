<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomerService;
use App\Http\Requests\CustomerPhoneNumberRequest;
use Exception;
use Log;
class CustomerPhoneNumberController extends Controller
{
    public $service;
    public function __construct(CustomerService $service)
    {
        $this->service = $service;
    }

    public function index(CustomerPhoneNumberRequest $request)
    {
        try{
            $users = $this->service->execute();
            return view('Home', ['users' => $users]);
        }catch(Exception $e){
            Log::error("error occured while getting users data", ['message' => $e->getMessage()]);
            return view('Home', ['users' => []]);
        }
        
    }
}
