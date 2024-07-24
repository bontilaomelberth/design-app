<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'request_id',
        'user_id',
        'comments',
        'comment_type'
    ];

    public function request()
    {
        return $this->belongsTo(Requests::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
