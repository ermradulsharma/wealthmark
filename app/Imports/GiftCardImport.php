<?php
namespace App\Imports;
use App\Models\giftcard;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 

class GiftCardImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new giftcard([
            'Gift_Card_Uploader_User_Id'=>Auth::user()->id,
            'Gift_Card_phone'=> $row['mobile'],	
            'Gift_Card_email'=> $row['email'],	
            'Gift_Card_Voucher_no'=> $row['g_c_sr_no'],	
            'Gift_Card_Voucher_pin'=> $row['g_c_order_number'],	
            'Gift_Card_Status'=> 1, 
            'Gift_Card_Amount'=> $row['g_c_reward_amount'],	
            'Gift_Card_Expiration_date'=> date('Y-m-d h:i:s', strtotime("+30 days")),	
            'created_at'=> date('Y-m-d h:i:s'),
        ]);
    }
    
    
}