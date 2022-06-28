<?php

namespace APP\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'adm_id';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'f_name', 
        'l_name', 
        'telp', 
        'email', 
        'usrname',
        'pswrd', 
        'status', 
        'created_date', 
        'created_by', 
        'modified_date', 
        'modified_by',
        'role', 
        'pic', 
    ];
    
}
