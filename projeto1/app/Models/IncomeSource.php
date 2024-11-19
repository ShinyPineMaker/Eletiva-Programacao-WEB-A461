<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;

class IncomeSource extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'monthly_income', 'annual_income'];
}
