<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainer;

class Companies extends Model
{
    protected $table = 'Companies';

    protected $with = array('trainer');

    public function search($value)
    {
        return self::where("category_id","=",$value)->paginate(10);
    }

    public function trainer()
    {
        return $this->hasOne(Trainer::class, 'company_id', 'company_id');
    }
    public function companyCat()
    {
        return $this->hasMany(Categories::class, 'category_id', 'category_id');
    }
}
