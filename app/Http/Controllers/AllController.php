<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AllController extends Controller
{
    public function credit()
    {
        $token = $this->getToken();
        $token = $token;
        $order = $this->createOrder($token);
        $price = 100;
        $user = Auth::user();
        $phone_number = +201038887470;
        $paymentToken = $this->getPaymentToken($order, (string) $token, $price, $user, $phone_number);

        return \Redirect::away('https://accept.paymob.com/api/acceptance/iframes/848529?payment_token='.$paymentToken);
    }

    public function getToken()
    {
        $response = Http::post('https://accept.paymob.com/api/auth/tokens', [
            'api_key' => 'ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2T1RjNE16RXlMQ0p1WVcxbElqb2lhVzVwZEdsaGJDSjkuaVdlMUxIaEZWekMzbDlzR0VwenI0UF8zUjBHbHlQZUk1cmJvQmJkaGNIYklCcXMzX0RXelpmMEJKMVVXYmhRVTlyQWd2MndUUG5fbjNETURkdWhkb1E=',
        ]);

        return $response->object()->token;

    }

    public function createOrder($token)
    {

        $data = [
            'auth_token' => $token,
            'delivery_needed' => 'false',
            'amount_cents' => 100 * 100,
            'currency' => 'EGP',
            'items' => [

            ],

        ];
        $response = Http::post('https://accept.paymob.com/api/ecommerce/orders', $data);

        return $response->object();
    }

    public function getPaymentToken($order, $token, $price, $user, $phone_number)
    {
        $billingData = [
            'apartment' => '805',
            'email' => auth()->user()->user_email,
            'floor' => '1',
            'first_name' => auth()->user()->user_name,
            'street' => 'Test Stret',
            'building' => '14',
            'phone_number' => auth()->user()->user_phone ?? 0120000000,
            //   "shipping_method" => "PKG",
            'postal_code' => '21543',
            'city' => 'cairo',
            'country' => 'EG',
            'last_name' => auth()->user()->user_name,
            'state' => 'Egypyt',
        ];
        $data = [
            'auth_token' => $token,
            'amount_cents' => $price * 100,
            'expiration' => 3600,
            'order_id' => $order->id,
            'billing_data' => $billingData,
            'currency' => 'EGP',
            'integration_id' => 4583079,
        ];

        $response = Http::withHeaders(['Content-Type' => 'application/json'])
            ->post('https://accept.paymob.com/api/acceptance/payment_keys', $data);

        return $response->object()->token;
    }

    public function callback(Request $request)
    {

        $data = $request->all();

        ksort($data);

        $array = [
            'amount_cents',
            'created_at',
            'currency',
            'error_occured',
            'has_parent_transaction',
            'id',
            'integration_id',
            'is_3d_secure',
            'is_auth',
            'is_capture',
            'is_refunded',
            'is_standalone_payment',
            'is_voided',
            'order.id',
            'owner',
            'pending',
            'source_data.pan',
            'source_data.sub_type',
            'source_data.type',
            'success',
        ];
        $connectedString = '';
        $secret = '5F6FF21A3CBC740E7EB8A8320B935DD8';
        $hmvc = \hash_hmac('sha512', $connectedString, $secret);
        foreach ($data as $key => $element) {
            if (in_array($key, $array)) {
                $connectedString .= $element;
            }
        }
        // dd($data);
        if ($data['success'] == 'true') {
            return redirect('index')->with('success', 'تمت العملية بنجاح');
        } else {
            return redirect('aboutUs')->with('error', 'حدث خطأ يرجى التأكد من بيانات البطاقة');
        }
    }
}
