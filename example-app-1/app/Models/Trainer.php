<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table = 'trainers';

    public function search($value)
    {
        return self::where("trainer_name","LIKE","%{$value}%");
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'company_id', 'company_id');
    }
}
