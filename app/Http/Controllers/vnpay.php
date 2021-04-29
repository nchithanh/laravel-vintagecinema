<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class vnpay extends Controller
{
    public function create(Request $request)
    {
        session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "FBRII8TM"; //Mã website tại VNPAY 
        $vnp_HashSecret = "PFDKTIFSQFGVLAKRRSDRPOSPZALYBUAT"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:4200/qr";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request['price'] * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = '';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return json_encode($vnp_Url);
    }


    public function return(Request $request)
{
    // if($request->vnp_ResponseCode == "00") {
    //     return 'https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=http://localhost:4200/'.$request['vnp_BankTranNo'].'';
    // }
    
    // $url = session('url_prev','/');
    // if($request->vnp_ResponseCode == "00") {
    //     $this->apSer->thanhtoanonline(session('cost_id'));
    //     return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');
    // }
    // session()->forget('url_prev');
    // return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');

    $data = DB::table('detail_booking')
    ->where('id_user',$request['id_user'])
    ->where('id_film',$request['id_film'])
    ->where('id_cinema',$request['id_cinema'])
    ->where('id_show',$request['id_show'])
    ->where('code',$request['code'])
    ->get();

    if(count($data)>0){
        $data = json_decode($data,true);
        DB::insert('insert into seat_checked (id_show, id_seat, id_detail_booking) 
        values (?, ?, ?)', 
        [$request['id_show'], $request['id_seat'],$data[0]['id_detail_booking']]);
        return $request;
    };
    
    DB::select('INSERT INTO `detail_booking`(`id_film`, `id_cinema`, `id_show`, `id_user`, `code`)
    VALUES ('.$request['id_film'].','.$request['id_cinema'].','.$request['id_show'].','.$request['id_user'].',"'.$request['code'].'")');

    // DB::select('INSERT INTO `detail_booking`(`id_detail_booking`, `id_film`, `id_cinema`, `id_show`, `id_user`, `code`) 
    // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])');

    $data = DB::table('detail_booking')
    ->where('id_user',$request['id_user'])
    ->where('id_film',$request['id_film'])
    ->where('id_cinema',$request['id_cinema'])
    ->where('id_show',$request['id_show'])
    ->where('code',$request['code'])
    ->get();

    $data = json_decode($data,true);
        DB::insert('insert into seat_checked (id_show, id_seat, id_detail_booking) 
        values (?, ?, ?)', 
        [$request['id_show'], $request['id_seat'],$data[0]['id_detail_booking']]);
        return $request;


    
}
    
}
