<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'predicted_proba_class_0', 'predicted_proba_class_1', 'no_teks', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
