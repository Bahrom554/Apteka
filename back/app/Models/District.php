<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{
    protected $table = 'district';

    protected $fillable = ['name_uz', 'name_ru', 'name_en', 'code', 'region_id', 'parent_code', 'status', 'deleted_at', 'created_at', 'updated_at',];

    public static function rules()
    {
        return [
            'name_uz' => 'string|nullable',
            'name_ru' => 'string|nullable',
            'name_en' => 'string|nullable',
            'code' => 'string|nullable',
            'region_id' => 'integer|nullable',
            'parent_code' => 'integer|nullable',
            'status' => 'integer|nullable',
            'deleted_at' => 'datetime|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',
        ];
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
