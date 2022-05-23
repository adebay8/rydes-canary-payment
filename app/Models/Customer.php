<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\UUID;

class Customer extends Model
{
    use UUID;
    use HasFactory;

     /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'integration' => '0',
        'customer_code' => '0',
        'customer_id' => '0',
    ];

    public function customer_transaction_initializations(): HasMany
    {
        return $this->hasMany(CustomerTransactionInitialization::class);
    }

    public function customer_cards(): HasMany 
    {
        return $this->hasMany(CustomerCard::class);
    }
}
