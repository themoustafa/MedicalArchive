<?php

namespace App\Models;

use CodeIgniter\Model;

class DoctorHospitalModel extends Model
{
    protected $table      = 'doctorHospitalXREF';
    protected $primaryKey = '';

    protected $useAutoIncrement = false;

    protected $returnType     = \CodeIgniter\Entity\Entity::class;
    protected $useSoftDeletes = false;

		protected $allowedFields = ['hospitalId', 'doctorId', 'hireDate', 'contractImage'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

		protected $validationRules    = [
			'hospitalId' =>'required',
			'doctorId' =>'required',
			'hireDate' =>'required',
			'contractImage' =>'required',
		];
		protected $validationMessages = [
			'required' => '{filed} is required'
		];
    protected $skipValidation     = true;
}
