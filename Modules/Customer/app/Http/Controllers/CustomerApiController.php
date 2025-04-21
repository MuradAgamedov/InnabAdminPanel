<?php

namespace Modules\Customer\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Customer\Models\Customer;

class CustomerApiController extends Controller
{
    public function get_customers(Request $request): JsonResponse
    {
        $customers = Customer::with('imageWithUrl')->get();

        $customers->transform(function ($customer) {
            if ($customer->imageWithUrl && isset($customer->imageWithUrl->url)) {
                $customer->imageWithUrl->url = config('app.url') . '/' . ltrim($customer->imageWithUrl->url, '/');
            }
            return $customer;
        });

        return response()->json($customers);
    }
}
