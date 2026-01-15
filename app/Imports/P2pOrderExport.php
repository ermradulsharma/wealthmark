<?php
namespace App\Imports;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 


    
    class P2pOrderExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
{
    $buyerid = Auth::user()->id;
    $sellerid = Auth::user()->id;
   
    $all_p2p_orders = Order::leftJoin('users as buyer', 'orders.buyer_id', '=', 'buyer.id')
            ->leftJoin('users as seller', 'orders.seller_id', '=', 'seller.id')
            ->where(function($query) use ($buyerid, $sellerid) {
                $query->where('orders.buyer_id', $buyerid)
                      ->orWhere('orders.seller_id', $sellerid);
            })
            ->orWhere(function($query) use ($buyerid, $sellerid) {
                $query->where('orders.buyer_id', $sellerid)
                      ->orWhere('orders.seller_id', $buyerid);
            })
            ->orderByDesc('orders.created_at')
            ->select('orders.*', 'buyer.first_name as buyer_name', 'seller.first_name as seller_name')
            ->get();
                
    $p2porderData = collect();

    if ($all_p2p_orders->isNotEmpty()) {
        foreach($all_p2p_orders as $p2p_order => $value) {
            $base_url=env('BMK_API_BASE_URL');
            $BmkApiController = new \App\Http\Controllers\BmkApiController;
            $url = $base_url.'/get_currency';
            $params = array();
            $allcurrency = collect($BmkApiController->verify_api($url,$params));
            $currencies = $allcurrency->where('id',$value->domestic_currency_type)->first();
            $currenciesname = $currencies->name;
            
            if($value->order_status == 0){
                $order_status = 'Pending';
            }
            
            if($value->order_status == 4 || $value->order_status == 2 || $value->order_status == 3 ){
                $order_status = 'Cancled';
            }
            
            if($value->order_status == 1 && $value->buyer_confirmation_status == 1 && $value->seller_confirmation_status == 1){
                $order_status = 'Completed';
            }
            
            if($value->order_status == 1 && $value->buyer_confirmation_status == 0 && $value->seller_confirmation_status == 0){
                $order_status = 'Not Completed';
            }
            
            $p2porderData->push([
                'order_id' => $value->order_id,
                'buyer_name' => $value->buyer_name,
                'seller_name' => $value->seller_name,
                'buyer_country' => $value->buyer_country,
                'seller_country' => $value->seller_country,
                'crypto_type' => $value->crypto_type,
                'total_crypto_value' => $value->total_crypto_value,
                'domestic_currency_value' => $value->domestic_currency_value,
                'domestic_currency_type' => $currenciesname,
                'crypto_current_value' => $value->crypto_current_value,
                'current_crypto_in_inr' => $value->current_crypto_in_inr,
                'order_status' => $order_status,
                'created_at' => $value->created_at,
            ]);
        }
    }
    
    return $p2porderData;
}

  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array{
        
        
        return ["ORDER ID", "BUYER/SELLER NAME", "SELLER/BUYER NAME","BUYER COUNTRY", "SELLER COUNTRY", "CRYPTO TYPE","TOTAL CRYPTO VALUE", "DOMESTIC CURRENCY VALUE",
        "DOMESTIC CURRENCY TYPE","CRYPTO CURRENT VALUE","CURRENT CRYPTO VALUE IN DOMESTIC CURRENCY","ORDER STATUS","ORDER DATE"];
    }
}
    
    
    
