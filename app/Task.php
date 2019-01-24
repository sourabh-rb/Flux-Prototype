<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table = 'task';
    public $timestamps = false;

    public function toggleStatus()
    {
      $this->status = ! $this->status;
      return $this;
    }
}
