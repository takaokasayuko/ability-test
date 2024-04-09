<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'exchange_tel',
        'subscriber_tel',
        'address',
        'building',
        'detail'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
