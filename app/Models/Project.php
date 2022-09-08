<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Casts\HtmlSpecialCharsCast;
use Mews\Purifier\Casts\CleanHtml;

class Project extends BaseModel
{

    protected $fillable = [
        'user_id',
        'language',
        'title',
        'client',
        'content',
        'cover_image',
        'links',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'title' => HtmlSpecialCharsCast::class,
        'client' => HtmlSpecialCharsCast::class,
        'links' => CleanHtml::class,
        'content' => CleanHtml::class,
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'cover_image_link',
    ];


    /**
     * Accessor
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function getCoverImageLinkAttribute()
    {
        return Storage::url($this->cover_image);
    }

    /**
     * User has projects
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
