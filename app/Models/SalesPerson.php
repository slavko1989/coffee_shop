<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesPerson extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','email'];

    public function countries()
    {
        return $this->belongsToMany(Country::class, 'country_sales_people', 'salesperson_id', 'country_id')
            ->withPivot('role', 'assigned_date', 'priority')
            ->withTimestamps();
    }
}
