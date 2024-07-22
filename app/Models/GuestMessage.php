<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestMessage extends Model
{
    use HasFactory;
    protected $table = 'guest_message';
    protected $fillable = ['nama', 'message', 'project_id'];
}
