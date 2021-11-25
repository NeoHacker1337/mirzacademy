<?php namespace App\Models;

use CodeIgniter\Model;

class AddreviewModel extends Model
{
    protected $table      = 'addreview';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['firstname','lastname','email','message'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}
