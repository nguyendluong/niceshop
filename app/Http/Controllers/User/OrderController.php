<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Store;
use App\Models\Size;
use App\Models\Order;
use App\Models\ProductOrder;

class OrderController extends Controller
{
    public function addToCart(Request $request)
    {
        $user = Auth::guard('web')->user();

        $product = Product::findOrFail($request->productId);
        $price = $product->price; 

        $existOrder = Order::where('userId', $user->id)->where('status' , 0)->where('productId' , $request->productId)->first();

        if ($existOrder) {
            $newTotal = $price * $request->quantity;
            Order::where('userId', $user->id)->where('status' , 0)
                ->update(['total' => $existOrder['total'] + $newTotal]);
            $existProductOrder = ProductOrder::where('orderId', $existOrder->id)->where('sizeId', $request->size)->first();
            if ($existProductOrder) {
                ProductOrder::where('orderId', $existOrder->id)->where('sizeId', $request->size)->update([
                    'quantity' => $existProductOrder['quantity'] + $request->quantity
                ]);
            } else {
                $productOrder;
                $productOrder['orderId']  = $existOrder->id;
                $productOrder['sizeId']  = $request->size; // Is size Id
                $productOrder['quantity']  = $request->quantity;
                $productOrder['price']  = $price;
        
                ProductOrder::create($productOrder);
            }
        }else {
            $newTotal = $price * $request->quantity;
            $order['productId'] = $request->productId;
            $order['userId'] = $user->id;
            $order['total'] = $newTotal;
            $order['paymentMethod'] = 0;
            $order['note'] = '';
            $order['status'] = 0;
            $order['address'] = '';

    
            $orderId = Order::create($order)->id; 
            // Handle product order
            $existProductOrder = ProductOrder::where('orderId', $orderId)->where('sizeId', $request->size)->first();
            if ($existProductOrder) {
                ProductOrder::where('orderId', $orderId)->where('sizeId', $request->size)->update([
                    'quantity' => $existProductOrder['quantity'] + $request->quantity
                ]);
            } else {
                $productOrder;
                $productOrder['orderId']  = $orderId;
                $productOrder['sizeId']  = $request->size; // Is size Id
                $productOrder['quantity']  = $request->quantity;
                $productOrder['price']  = $price;
        
                ProductOrder::create($productOrder);
            }
        }
        
        return response()->json(['status'=>true,"redirect_url"=>url('/cart')]);
    }

    public function cart()
    {
        $user = Auth::guard('web')->user();
        $existOrder = Order::where('userId', $user->id)->where('status' , 0)->get();
        $total = 0;
        foreach ($existOrder as $order) {
            $order['productOrders'] = self::getProductFromOrderId($order);
            $total = $total + $order['total'];
        }

        return view('client.cart.index', compact('existOrder', 'total'));
    }

    public function updateQuantityOrder(Request $request)
    {
        return response()->json(['status'=>true,"total"=>$total, 'summary', $summary]);
    }

    public static function getProductFromOrderId($order)
    {
        $productOrders = ProductOrder::where('orderId', $order->id)->get();
        foreach ($productOrders as $prod) {
            $prod['sizeName'] = self::getSizeName($prod->sizeId);
            $prod['productDetail'] = self::getProduct($order->productId);
        }
        return $productOrders;
    }

    public static function getSizeName($sizeId)
    {
        $size = Size::where('id', $sizeId)->first();
        return $size;
    }

    public static function getProduct($productId)
    {
        $product = Product::where('id', $productId)->first();
        $product['avatar'] = self::getAvatar($productId);

        return $product;
    }

    public static function getAvatar($product_id)
    {
        $galleries = Gallery::where('product_id', $product_id)->get();
        return $galleries;
    }

    public function checkout(Request $request)
    {
        $user = Auth::guard('web')->user();
        $orders  = Order::where('userId', $user->id)->where('status' , 0)->get();
        foreach ($orders as $order) {
            Order::where('userId', $user->id)->where('status' , 0)->where('id', $order->id)
                ->update(['status' => 1, 'note' => $request->note, 'address'=> $request->address]);
            
        }

        toastr()->success('Your order submit successfully');
       
        return redirect('/');

    }
}