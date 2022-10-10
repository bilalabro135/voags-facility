<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [

            'date',
            'requested_by',
            'account',
            'purchase_approved',
            'transferred_account_future',
            'vendor',
            'quote_no',
            'address',
            'contact_person',
            'phone_number',
            'fax_no',
            'shipping_cost',
            'other_charges',
            'total_charges',
            
    ];
}
