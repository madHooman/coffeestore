<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";
    protected $guarded = [];

    use HasFactory;

    // ارتباط hasMany با MenuItem
//    public function items()
//    {
//        return $this->hasMany(MenuItem::class);  // نام کلاس درست باشد
//    }
}
