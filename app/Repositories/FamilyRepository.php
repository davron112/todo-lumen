<?php

namespace App\Repositories;

use App\Models\Family;
use Illuminate\Log\Logger;
use Illuminate\Container\Container as App;
use App\Repositories\Contracts\FamilyRepository as ArticleRepositoryInterface;

class FamilyRepository extends Repository implements ArticleRepositoryInterface
{
    /**
     * Family constructor.
     *
     * @param App $app
     * @param Logger $log
     */
    public function __construct(
        App $app,
        Logger $log
    ) {
        parent::__construct($app, $log);
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Family::class;
    }

}
