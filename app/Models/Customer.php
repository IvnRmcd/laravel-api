<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Invoices;

class Customer extends Model
{
    use HasFactory;

    public function invoices()
    {
        return $this->hasMany(invoices::class);
    }
}
