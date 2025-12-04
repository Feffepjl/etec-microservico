<?php

namespace App\Http\Controllers;
use App\Models\OrderModel;
use App\Services\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function create () {
        return view('order');
    }

    public function store(Request $orderRequest, OrderService $service): JsonResponse {

        try {

            $orderResponse = $service->createOrder($orderRequest);

            return response()->json(["status" => "success", "response" => $orderResponse]);
        } catch (\Exception $e) {
            return response()->json(["status"=> "error", $e->getMessage()]);
        }
    }
}
