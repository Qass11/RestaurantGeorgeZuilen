<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategorie extends Model
{
    use HasFactory;

    public function items() {
        return $this->hasMany(MenuItems::class, 'menu_categories_id', 'id');
    }
}
