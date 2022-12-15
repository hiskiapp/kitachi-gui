<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    use HasFactory, Uuids;

    protected $table = 'predictions';

    protected $fillable = [
        'label_id',
        'image',
        'accuracy',
        'ip',
        'user_agent',
    ];

    public function label()
    {
        return $this->belongsTo(Label::class);
    }

    public function getAccuracyAttribute($value)
    {
        return $value * 100;
    }
}
