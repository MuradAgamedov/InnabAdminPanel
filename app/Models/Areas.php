<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Areas extends Model
{
    use HasFactory,HasTranslations ;
    protected $guarded = [];
    public $translatable = ['area_name'];

    public function parent_area() {
        return $this->hasOne(Areas::class,'id' ,'parent_id');
    }

      public function childrens() {
        return $this->hasMany(Areas::class, 'parent_id');
    }
}
