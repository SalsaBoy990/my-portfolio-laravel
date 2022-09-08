<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Casts\HtmlSpecialCharsCast;
use Mews\Purifier\Casts\CleanHtml;
use Illuminate\Support\Facades\Storage;

class Meta extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'full_name',
        'title',
        'subtitle',
        'greeting_headline',
        'greating_description',
        'email_address',
        'github_link',
        'cv',
        'profile_photo',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'language' => HtmlSpecialCharsCast::class,
        'full_name' => HtmlSpecialCharsCast::class,
        'subtitle' => HtmlSpecialCharsCast::class,
        'greeting_headline' => HtmlSpecialCharsCast::class,
        'greating_description' => CleanHtml::class,
        'email_address' => HtmlSpecialCharsCast::class,
        'github_link' => HtmlSpecialCharsCast::class,
        'cv' => HtmlSpecialCharsCast::class,
        'profile_photo' => HtmlSpecialCharsCast::class,
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_link',
        'cv_link',
    ];

    /**
     * Accessor
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function getProfilePhotoLinkAttribute()
    {
        return Storage::url($this->profile_photo);
    }

    /**
     * Accessor
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function getCvLinkAttribute()
    {
        return Storage::url($this->cv);
    }

    /**
     * User has metas
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
