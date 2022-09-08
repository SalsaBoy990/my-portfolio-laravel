<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\HtmlSpecialCharsCast;
use Mews\Purifier\Casts\CleanHtml;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'language',
        'title',
        'content',
        'bg_color',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'title' => HtmlSpecialCharsCast::class,
        'content' => CleanHtml::class,
    ];

    /**
     * Bg colors
     * 
     * @var array
     */
    public const COLORS = [
        'bg-main-800',
        'bg-main-400',
        'bg-grass-green',
        'bg-turquoise',
        'bg-brown',
        'bg-darkpurple',
        'bg-gray-400'
    ];

    /**
     * User has skills
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
