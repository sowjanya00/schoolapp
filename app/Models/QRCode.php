<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    use HasFactory;
    use QrCode;

public function getQRCodeImageAttribute()
{
    return QrCode::size(500)
        ->generate($this->data);
}

    
    

}
