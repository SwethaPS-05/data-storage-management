<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\create_table;

class Student extends Model
{
    protected $table = 'create_tables';
    protected $primaryKey = 'id';
    protected $fillable = ['name','address','mobile'];
    use HasFactory;

    public function create_table(){
        return $this ->hasMany(create_table::class);
    }


}
