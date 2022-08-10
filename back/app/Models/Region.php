<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    protected $table = 'region';

    protected $fillable = ['name_uz', 'name_ru', 'name_en', 'code', 'country_id', 'status', 'deleted_at', 'created_at', 'updated_at',];

    public static function rules()
    {
        return [
            'name_uz' => 'string|nullable',
            'name_ru' => 'string|nullable',
            'name_en' => 'string|nullable',
            'code' => 'string|nullable',
            'country_id' => 'integer|nullable',
            'status' => 'integer|nullable',
            'deleted_at' => 'datetime|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',
        ];
    }
}
