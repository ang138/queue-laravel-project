<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Data extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'bkid';
	public $timestamps = true;

    protected $fillable = [
        'bkname',
        'email',
        'tel',
        'wtype',
        'title',
        'details',
        'channel',
        'date',
        'expfile',
    ];

    public function data(){
        return $this->belongsTo(User::class);
    }
}
