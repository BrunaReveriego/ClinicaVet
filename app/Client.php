<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'clients';

    protected $fillable = [
        'id',
        'name',
        'birthday',
        'email',
        'rg',
        'cpf',
        'phone',
        'cellphone',
        'street',
        'number',
        'district',
        'postcode',
        'city',
        'country',
        'animal_id',
        'comments',
        'is_actived',
        'created_at',
        'updated_at'

    ];
}
