<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public static function getById($id)
    {
        return Experience::where([
            'id' => $id,
        ])->first();
    }
}
