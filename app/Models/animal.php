<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class animal extends Model
{
    use HasFactory;

    protected $table = 'animals';

    protected $fillable = ['name_of_pet', 'animal_type', 'owner_of_pet', 'address_of_owner'];
}
