<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Translatable;

class categories extends Model
{
    use Translatable;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $attributes = $model->getAttributes();
            if (empty($attributes['nama_kategori_en']) && !empty($attributes['nama_kategori'])) {
                $model->attributes['nama_kategori_en'] = $attributes['nama_kategori'];
            }
        });
    }

    public function getNamaKategoriAttribute($value)
    {
        return $this->translate('nama_kategori', $value);
    }

    public function events()
    {
        return $this->hasMany(events::class, 'kategori_id');
    }
}
