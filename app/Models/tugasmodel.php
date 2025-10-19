<?php 

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
    protected $table = 'tb_list'; 
    protected $primaryKey = 'task_id';
    protected $allowedFields = ['task_name','status','priority','created_at','deadline'];
}