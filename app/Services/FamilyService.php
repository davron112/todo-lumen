<?php

namespace App\Services;

use App\Repositories\Contracts\FamilyRepository;
use Illuminate\Database\DatabaseManager;
use Illuminate\Log\Logger;
use App\Services\Contracts\FamilyService as FamilyServiceInterface;

class FamilyService extends BaseService implements FamilyServiceInterface {

    /**
     * FamilyService constructor.
     *
     * @param DatabaseManager $databaseManager
     * @param Logger $logger
     * @param FamilyRepository $repository
     */
    public function __construct(DatabaseManager $databaseManager, Logger $logger, FamilyRepository $repository)
    {
        parent::__construct($databaseManager, $logger, $repository);
    }

    /**
     * @param array $data
     */
    public function store(array $data) {

    }

    /**
     * @param int $id
     * @param array $data
     */
    public function update($id, array $data) {

    }

    /**
     * @param array $data
     */
    public function delete(array $data) {

    }
}
