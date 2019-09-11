<?php

namespace App\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryCriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

interface Repository extends RepositoryCriteriaInterface, RepositoryInterface
{
    /**
     * Retrieve the "count" result of the query.
     *
     * @param  string  $columns
     * @return int
     */
    public function count($columns = '*');

    /**
     * Reset all criteria, scopes and model.
     *
     * @return $this
     */
    public function reset();
}
