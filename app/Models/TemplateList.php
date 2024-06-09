<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateList extends Model
{
    use HasFactory;
    protected $table = 'template_list';
    protected $fillable = ['nama','preview','jenis'];
}
