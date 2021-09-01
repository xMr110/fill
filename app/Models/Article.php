<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Traits\Resizable;

class Article extends Model
{
    use HasFactory;
    use Resizable;


    protected $guarded = [];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->user_id && Auth::user()) {
            $this->user_id = Auth::user()->getKey();
        }

        return parent::save();
    }


    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
