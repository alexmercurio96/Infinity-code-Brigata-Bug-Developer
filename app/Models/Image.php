<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['path'];

    public function annoucement()
    {
        return $this->belongsTo(Announcement::class);
    }
    
}
