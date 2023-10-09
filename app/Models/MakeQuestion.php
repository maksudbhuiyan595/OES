<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakeQuestion extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function subjects(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
    public function levels(){
        return $this->belongsTo(Level::class,'level_id','id');
    }
}
