<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function toArray($request)
{
    return [
        'id' => $this->id,
        'name' => $this->name,
        'place' => $this->place,
        'adress' => $this->adress,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
    ];
}
}
