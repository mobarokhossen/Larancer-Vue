<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TransactionType
 *
 * @package App
 * @property string $title
*/
class TransactionType extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['title'];
    

    public static function storeValidation($request)
    {
        return [
            'title' => 'max:191|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'title' => 'max:191|required'
        ];
    }

    

    
    
    
}