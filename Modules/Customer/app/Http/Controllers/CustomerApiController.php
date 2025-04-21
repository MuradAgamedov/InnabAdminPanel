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
            $customer->image_url = $customer->imageWithUrl?->url
                ? env('APP_URL') . '/' . $customer->imageWithUrl->url
                : null;
            unset($customer->imageWithUrl); // istəmirsənsə sil
            return $customer;
        });

        return response()->json($customers);
    }
}
