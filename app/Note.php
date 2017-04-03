<?php

namespace Notebook;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'title',
        'body',
        'notebook_id',
    ];
    
    public function notebook()
    {
        return $this->belongsTo(Notebook::class);
    }
}
