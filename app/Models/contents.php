<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Translatable;

class contents extends Model
{
    use Translatable;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $attributes = $model->getAttributes();
            foreach (['judul', 'deskripsi'] as $field) {
                $fieldEn = $field . '_en';
                if (empty($attributes[$fieldEn]) && !empty($attributes[$field])) {
                    $model->attributes[$fieldEn] = $attributes[$field];
                }
            }
        });
    }

    public function getJudulAttribute($value)
    {
        return $this->translate('judul', $value);
    }

    public function getDeskripsiAttribute($value)
    {
        return $this->translate('deskripsi', $value);
    }

    public function category()
    {
        return $this->belongsTo(categories::class, 'kategori_id');
    }
}
