<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','email','mobile','password','otp'];

    public function customer(){
        return $this->hasMany(Customer::class);
    }
}
