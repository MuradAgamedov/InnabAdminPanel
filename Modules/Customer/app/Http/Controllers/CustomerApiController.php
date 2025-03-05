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
        // Eager load the 'imageWithUrl' relation to get the full image URL
        $customers = Customer::with('imageWithUrl')->get();

        // Return the customers as JSON response
        return response()->json($customers);
    }
}
