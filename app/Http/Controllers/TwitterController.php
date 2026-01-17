<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use App\Models\Country;
use App\Models\Currency;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Order;
use WisdomDiala\Cryptocap\Facades\Cryptocap;
use App\Models\Postad;
use Illuminate\Support\Facades\DB;

class TwitterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToTwitter()
    {

        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleTwitterCallback()
    {
        try {

            $user = Socialite::driver('twitter')->user();

            $finduser = User::where('twitter_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->intended(app()->getLocale() . 'user/dashboard');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'twitter_id' => $user->id,
                    //  'password' => encrypt('123456dummy')
                ]);

                Auth::login($newUser);

                return redirect()->intended(app()->getLocale() . 'user/dashboard');
            }
        } catch (Exception $e) {
            return redirect()->intended(app()->getLocale() . '/login');
            dd($e->getMessage());
        }
    }

    public function getOrderStatusByUserID(Request $request)
    {

        $currentDateTime = Carbon::now();
        $newDateTime = Carbon::now()->subSecond(2);
        //  echo "<pre>";
        //  print_r($currentDateTime->toDateTimeString());
        //  print_r($newDateTime->toDateTimeString());

        $traderDetail =  User::where('id', $request->trader_id)->first();

        $getRecentOrdersCount = Order::where(function ($query) use ($request) {
            $query->where('buyer_id', $request->trader_id)
                ->orWhere('seller_id', $request->trader_id);
        })
            ->where('order_accept_action', 1)
            ->whereBetween('created_at', [$newDateTime->toDateTimeString(), $currentDateTime->toDateTimeString()])
            //   ->where('created_at', '>=' , $newDateTime->toDateTimeString())
            ->count();

        $getRecentOrders = Order::where(function ($query) use ($request) {
            $query->where('buyer_id', $request->trader_id)
                ->orWhere('seller_id', $request->trader_id);
        })
            ->where('order_accept_action', 1)
            ->whereBetween('created_at', [$newDateTime->toDateTimeString(), $currentDateTime->toDateTimeString()])
            // ->where('created_at', '>=' , $newDateTime->toDateTimeString())
            ->first();
        return response()->json(['count' => $getRecentOrdersCount, 'tradername' => $traderDetail, 'getRecentOrders' => $getRecentOrders], 200);
    }

    public function getexpressOrderStatus(Request $request)
    {

        $currentDateTime = Carbon::now();
        $newDateTime = Carbon::now()->subSecond(2);
        //  echo "<pre>";
        //  print_r($currentDateTime->toDateTimeString());
        //  print_r($newDateTime->toDateTimeString());

        $traderDetail =  User::where('id', $request->trader_id)->first();

        $getRecentOrdersCount = Order::where(function ($query) use ($request) {
            $query->whereNotNull('buyer_id')
                ->whereNull('seller_id');
        })
            ->where('order_accept_action', 0)
            ->whereBetween('created_at', [$newDateTime->toDateTimeString(), $currentDateTime->toDateTimeString()])
            //   ->where('created_at', '>=' , $newDateTime->toDateTimeString())
            ->count();

        $getRecentOrders = Order::where(function ($query) use ($request) {
            $query->whereNotNull('buyer_id')
                ->whereNull('seller_id');
        })
            ->where('order_accept_action', 0)
            ->whereBetween('created_at', [$newDateTime->toDateTimeString(), $currentDateTime->toDateTimeString()])
            // ->where('created_at', '>=' , $newDateTime->toDateTimeString())
            ->first();
        return response()->json(['count' => $getRecentOrdersCount, 'tradername' => $traderDetail, 'getRecentOrders' => $getRecentOrders], 200);
    }

    public function trade(Request $request)
    {  // craeted to remove hidden values 18052023 at 12.55pm
        // dd($request->all());
        // echo $request->selectedcurrency; // this is currency type in which user is trading like INR, USD etc
        // echo $request->selectedcrypto;  // this is coin name in which user is trading like BMK, BTC, ETH etc
        // echo $request->amountCurrency;  // this is curreny value which is selected by user like 100 INR
        // echo $request->cryptoValue;     // this is coin value which is selected by user like 0.000045 BMK etc


        $currencyData = Currency::where('name', $request->selectedcurrency)->first();
        $cryptoData = Currency::where('name', $request->selectedcrypto)->first();



        //  $userid = Auth::user()->id;
        //  $buyer_country_name = Auth::user()->country;

        // print_r($currencyData);
        // print_r($cryptoData);

        if ($request->selectedcrypto == 'BMK') {
            $BmkApiController = new BmkApiController;
            $base_url = env('BMK_API_BASE_URL');

            $url = $base_url . '/get_currency';
            $params = array();
            $allcurrency = $BmkApiController->verify_api($url, $params);

            $current_bmk_price_url = $base_url . '/get_bmk_currency_price';
            $bmk_params = array('currency_name' => $request->selectedcurrency);
            $bmk_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_params);
            $per_bmkPrice_inperticularCurrency =  $bmk_price->per_coin;

            if (isset($request->amountCurrency) && !empty($request->amountCurrency)) {
                $netmountofselectedCurrency = $request->amountCurrency;
                $netCoinValue = $request->amountCurrency / $per_bmkPrice_inperticularCurrency;
                // return $netCoinValue; 
            }

            if (isset($request->cryptoValue) && !empty($request->cryptoValue)) {
                $netCoinValue = $request->cryptoValue;
                $netmountofselectedCurrency = $per_bmkPrice_inperticularCurrency * $request->cryptoValue;
                // return $netmountofselectedCurrency; 
            }


            return response()->json(['clickedOn' => $request->clickedOn, 'current_crypto_value' => $bmk_price->per_coin, 'domesticCurrencyId' =>  $currencyData->id, 'inr_value_in_usd' =>  $currencyData->currencyVal_by_USD, 'selectedcurrency' => $request->selectedcurrency, 'selectedcoin' => $request->selectedcrypto, 'netCoin' => $netCoinValue, 'netAmmount' => $netmountofselectedCurrency], 200);
            //  return $bmk_price;

        } else {


            if (isset($request->amountCurrency) && !empty($request->amountCurrency)) {
                $netmountofselectedCurrency = $request->amountCurrency;
                // print_r('amountCurrency is set');
                if ($request->selectedcrypto == 'ETH') {
                    $getCoindata = Cryptocap::getSingleAsset('ethereum');
                }

                if ($request->selectedcrypto == 'BTC') {
                    $getCoindata = Cryptocap::getSingleAsset('bitcoin');
                }

                $perCoindata_inUSD = $getCoindata->data->priceUsd; // 1 ethereum value in USD
                $coinInOneUSD = 1 / $perCoindata_inUSD;
                $selectedCurrency = Currency::where('name', $request->selectedcurrency)->first();
                $selectedCurrency->currencyVal_by_USD; // 1 $selectedCurrency  in USD
                $price_ofOneCurrency_inUSD = 1 / $selectedCurrency->currencyVal_by_USD; // price of 1 selectedCurrency  in USD

                // print_r($selectedCurrency->currencyVal_by_USD);
                $netCoinValue =  ($selectedCurrency->currencyVal_by_USD  * $request->amountCurrency * $coinInOneUSD);
                //  return $netCoinValue;
            }

            if (isset($request->cryptoValue) && !empty($request->cryptoValue)) {
                $netCoinValue = $request->cryptoValue;
                // print_r('cryptoValue is set');
                if ($request->selectedcrypto == 'ETH') {
                    $getCoindata = Cryptocap::getSingleAsset('ethereum');
                }

                if ($request->selectedcrypto == 'BTC') {
                    $getCoindata = Cryptocap::getSingleAsset('bitcoin');
                }

                $perCoindata_inUSD = $getCoindata->data->priceUsd; // 1 ethereum value in USD
                //  $coinInOneUSD = 1/$perCoindata_inUSD;
                $totalcoins = $perCoindata_inUSD * $request->cryptoValue; // we get here how many usd in the value wht we have to convert  
                // print_r($totalcoins);

                $selectedCurrency = Currency::where('name', $request->selectedcurrency)->first();
                $price_ofOneCurrency_inUSD = 1 / $selectedCurrency->currencyVal_by_USD; // price of 1 selectedCurrency  in USD

                $netmountofselectedCurrency = $totalcoins  * $price_ofOneCurrency_inUSD;
                // return $netmountofselectedCurrency; 
            }

            return response()->json(['clickedOn' => $request->clickedOn,  'current_crypto_value' => $perCoindata_inUSD, 'domesticCurrencyId' =>  $selectedCurrency->id, 'inr_value_in_usd' =>  $price_ofOneCurrency_inUSD, 'selectedcurrency' => $request->selectedcurrency, 'selectedcoin' => $request->selectedcrypto, 'netCoin' => $netCoinValue, 'netAmmount' => $netmountofselectedCurrency], 200);
        }
    }

    public function recheckpostAds(Request $request, $adsid = '7687842506')
    {
        //  $adsid = '9143369836';

        $sum1 = DB::table('postads')
            ->where('adsid', $adsid)
            ->sum('total_amount');

        $sum2 = DB::table('orders')
            ->join('postads', 'postads.adsid', '=', 'orders.adsid')
            ->where('orders.adsid',  $adsid)
            ->sum('orders.total_crypto_value');

        echo 'total_amountFromPostads ' . $sum1 . '</br>';
        echo 'total_crypto_valueFromOrders ' . $sum2 . '</br>';
        $rest = $sum1 - $sum2;
        echo 'difference ' . $rest;
    }
}
