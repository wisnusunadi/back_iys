<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProjectList extends Model
{
    use HasFactory;
    protected $table = 'project_list';
    protected $fillable = ['nama_client', 'email', 'isi', 'link', 'template', 'jenis', 'music_list_id'];

    function TemplateList()
    {
        return $this->belongsTo(TemplateList::class, 'template');
    }

    function GuestMessage()
    {
        return $this->hasMany(GuestMessage::class);
    }
}
