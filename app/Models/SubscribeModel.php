<?php namespace App\Models;

use CodeIgniter\Model;

class SubscribeModel extends Model
{
    protected $table      = 'subscribe';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['email'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}
