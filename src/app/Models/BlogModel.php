<?php namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model {

    protected $table = 'post';
    protected $primaryKey = 'id';
  
    protected $allowedFields = ['title', 'content'];

    // protected $returnType = 'array';
    // protected $useSoftDeletes = 'true';

}
?>