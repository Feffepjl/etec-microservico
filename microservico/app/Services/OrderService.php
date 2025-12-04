<?php

namespace App\Services;

use App\Models\OrderModel;
use Illuminate\Http\Request;

class OrderService {

    public function createOrder(Request $orderRequest): OrderModel {
        $order = new OrderModel();
        $order->setId(random_int(1, 1000));
        $order->setProduct($orderRequest->input('product'));
        $order->setQuantity($orderRequest->input('quantity'));
        return $order;
    }
}
