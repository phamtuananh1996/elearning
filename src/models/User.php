<?php
namespace GFL\Elearning\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='user';

    public function organization()
    {
        return $this->belongsTo('GFL\Elearning\models\Organization','organization_id','id');
    }
}