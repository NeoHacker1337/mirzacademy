<?php namespace App\Models;

use CodeIgniter\Model;

class EnquiryformModel extends Model
{
    protected $table      = 'enquiryform';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['firstname','lastname','email','phone','subject','message'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}
