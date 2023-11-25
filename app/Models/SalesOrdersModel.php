<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrdersModel extends Model
{
    protected $primaryKey="salesorder_id";
    use HasFactory;
}
