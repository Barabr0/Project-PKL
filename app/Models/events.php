<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Translatable;

class events extends Model
{
    use Translatable;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $attributes = $model->getAttributes();
            foreach (['nama_event', 'deskripsi', 'lokasi'] as $field) {
                $fieldEn = $field . '_en';
                if (empty($attributes[$fieldEn]) && !empty($attributes[$field])) {
                    $model->attributes[$fieldEn] = $attributes[$field];
                }
            }
        });
    }

    public function getNamaEventAttribute($value)
    {
        return $this->translate('nama_event', $value);
    }

    public function getDeskripsiAttribute($value)
    {
        return $this->translate('deskripsi', $value);
    }

    public function getLokasiAttribute($value)
    {
        return $this->translate('lokasi', $value);
    }

    public function category()
    {
        return $this->belongsTo(categories::class, 'kategori_id');
    }
}
