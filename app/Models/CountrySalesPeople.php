<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountrySalesPeople extends Model
{
    use HasFactory;
    protected $fillable = ['country_id','salesperson_id'];

    public function salespersons()
    {
        return $this->belongsToMany(Salesperson::class, 'country_sales_people', 'country_id', 'salesperson_id')
            ->withPivot('role', 'assigned_date', 'priority')
            ->withTimestamps();
    }
}
