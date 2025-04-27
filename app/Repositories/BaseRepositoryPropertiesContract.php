<?php

namespace App\Repositories;



use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;

// this interface defines basic properties each repository class should implement
// example : this can be used to get related Model class name , query builder object
interface BaseRepositoryPropertiesContract
{



    public function getModel():Model;

}
