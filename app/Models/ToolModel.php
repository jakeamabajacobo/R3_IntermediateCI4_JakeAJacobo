<?php


namespace App\Models;

use CodeIgniter\Model;

class ToolModel extends Model{


    protected $table = 'tbltool';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'brand','qty'];
    protected $returnType = 'object';

    


}