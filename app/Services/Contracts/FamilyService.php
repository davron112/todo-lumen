<?php

namespace App\Services\Contracts;

use App\Models\Family;


interface FamilyService extends BaseService
{
    /**
     * Store a newly created resource in storage
     *
     * @param array $data
     * @return Family|bool
     */
    public function store(array $data);

    /**
     * Update family in the database.
     *
     * @param  int  $id
     * @param  array  $data
     * @return Family|bool
     */
    public function update($id, array $data);
    /**
     * Delete family in the database.
     *
     * @param  int  $id
     * @param  array  $data
     * @return Family|bool
     */
    public function delete($id, array $data);
}
