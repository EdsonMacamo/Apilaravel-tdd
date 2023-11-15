<?php

namespace App\Repositories;

use App\Models\Curse;

class CourseRepository
{

    protected $entity;
    public function  __construct(Curse  $course )
    {
        $this->entity = $course;
    }

    public function  getAllCourses()
      {
           return $this->entity->get();
      }

      public function createNewCourse(array $data)
      {
         return $this->entity->create($data);
      }
      public function getCurseByUuid(string $identify)
      {
         return $this->entity->where('uuid', $identify)->firstOrfail();
      }
}
