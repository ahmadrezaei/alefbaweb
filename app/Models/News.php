<?php

namespace App\Models;

use App\Events\NewsCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

/**
 * @property string $title
 * @property string $content
 * @property NewsView $view
 */
class News extends Model
{
    use HasFactory, HybridRelations;

    /**
     * @var string
     */
    protected $connection = 'mysql';
    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'content',
    ];
    /**
     * @var string[]
     */
    protected $dispatchesEvents = [
        'created' => NewsCreated::class,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function view()
    {
        return $this->hasOne(NewsView::class, 'news_id', 'id');
    }
}
