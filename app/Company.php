<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ["name","address","email","website","logo"];

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    public function getEmployeesNumberAttribute(){
        return count($this->employees);
    }
}
