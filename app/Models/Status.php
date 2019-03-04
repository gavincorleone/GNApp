<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
//   反向关联，通过微博查询用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
