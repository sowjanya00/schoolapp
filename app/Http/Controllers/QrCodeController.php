<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 //use App\models\QRCode;

class QrCodeController extends Controller
{
    public function index()
    {

      // $qrCode = new QRCode();
      // $qrCode->data = 'Your QR code data';
      // $qrCode->save();
      




      return view('qrcode');
    }
    
    

}
