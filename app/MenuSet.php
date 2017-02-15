<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSet extends Model
{
    //
  use SoftDeletes;
  protected $table = 'tblMenuSet';
  protected $primaryKey = 'menuCode';
  protected $fillable = ['price'];
  protected $dates = ['created_at', 'updated_at', 'deleted_at'];
  protected $casts = ['menuCode' => 'string'];
}
