<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Task extends Model
{
    public $timestamps = false;
use Notifiable;
protected $fillable= [
  'title','content','due_date','image'
];

}
