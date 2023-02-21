<?php

namespace App;

use App\Models\Ads;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [] ;

    public function ads()
    {
        return $this->belongsTo(Ads::class,'ads_id');
    }
}
