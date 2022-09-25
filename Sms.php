<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    //use HasFactory;

    protected $table = 'sms';

    protected $fillable = [
    	'subject',
    	'content',
    	'create_date'
    ];

    public $timestamps = false;

    public static function getListSms($limit = "")
    {
    	return self::take($limit)->get();
    }

}
