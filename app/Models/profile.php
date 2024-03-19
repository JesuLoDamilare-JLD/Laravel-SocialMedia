<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ?  $this->image : "profile/YX7Bq6ukh3Shidycty3QcQy1QMdKZQYUWsBEIWB1.png";
        return "/storage/" . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
