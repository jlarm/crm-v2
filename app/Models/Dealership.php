<?php

namespace App\Models;

use App\Enum\DevStatus;
use App\Enum\Rating;
use App\Enum\State;
use App\Enum\Status;
use App\Enum\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealership extends Model
{
    use HasFactory;

    protected $casts = [
        'uuid' => 'string',
        'user_id' => 'integer',
        'name' => 'string',
        'address' => 'string',
        'city' => 'string',
        'state' => State::class,
        'zip_code' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'current_solution_name' => 'string',
        'current_solution_use' => 'string',
        'notes' => 'string',
        'status' => Status::class,
        'rating' => Rating::class,
        'type' => Type::class,
        'in_development' => 'boolean',
        'dev_status' => DevStatus::class,
    ];
}
