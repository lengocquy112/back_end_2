<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    protected $table = 'trainers';

    public function trainersCompanies(){
        return $this->hasOne(Companies::class,'company_id','company_id');
    }
    
    public function search($value){
        $search_query = '%'.$value.'%';
        return self::where('trainer_name','like',$search_query)->paginate(15);
    }
}