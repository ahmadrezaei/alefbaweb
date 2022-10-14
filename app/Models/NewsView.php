<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class NewsView extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $connection = 'mongodb';
    /**
     * @var string[]
     */
    protected $fillable = ['news_id', 'views'];
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
     */
    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
