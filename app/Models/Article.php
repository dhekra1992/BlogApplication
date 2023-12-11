<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'short_description',
        'content',
        'user_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Vérifiez si user_id n'est pas déjà défini
            if (!$model->user_id) {
                // Définissez la valeur par défaut (par exemple, l'ID de l'utilisateur actuellement authentifié)
                $model->user_id = auth()->id();
            }
        });
    }


    public function relatedArticles()
    {
        return $this->hasMany(Article::class, 'id', 'related_articles');
    }
}
