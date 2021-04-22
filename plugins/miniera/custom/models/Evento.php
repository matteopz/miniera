<?php namespace Miniera\Custom\Models;

use Model;

/**
 * Model
 */
class Evento extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'miniera_custom_eventi';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery_evento' => 'System\Models\File'
    ];
}
