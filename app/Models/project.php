<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
   protected $fillable=[
    'name','description'
   ];
   protected static function boot()
   {
    parent::boot();
    ::creating(function($project){
        $project->user_id = auth()->id()

    });
   }
public function user():belongsTO
{
    return $this-BelongsTO(User::class);
}
}
