<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile','dept_name'];

    
    
        const Cse = 'Cse';
        const Ece = 'Ece';
        const Civil = 'Civil';
    
        public static $options = [
            self::Cse,
            self::Ece,
            self::Civil,
        ];
    
}


