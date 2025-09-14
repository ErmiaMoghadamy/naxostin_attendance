<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        "content", "year", "month", "day", "classbook_id"
        ];

    public function classbook() {
        return $this->belongsTo(Classbook::class);
    }
}
