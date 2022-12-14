<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Agen extends Model
{
    use HasFactory;
    use Sortable;
    
    protected $table = 'users';
    
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['name', 'email', 'password'];

    public $sortable = ['name', 'email', 'password'];

}
