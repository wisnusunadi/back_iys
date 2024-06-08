<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectList extends Model
{
    use HasFactory;
    protected $table = 'project_list';
    protected $fillable = ['nama_client','email','isi','link','template','jenis','music_list_id'];
}
