<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Colaborador extends Model
{
    protected $fillable=['nombre','apellido','documento','saldo','user_id'];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
