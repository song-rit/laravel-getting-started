<?php

// use Illuminate\Database\Eloquent\Model;

class Users extends Eloquent {
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = array('id', 'name', 'email');
}
?>