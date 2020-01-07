<?php

namespace App\Repositories;

use App\Models\Attendace;
use App\Repositories\BaseRepository;

/**
 * Class AttendaceRepository
 * @package App\Repositories
 * @version January 7, 2020, 9:38 am UTC
*/

class AttendaceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Attendace::class;
    }
}
