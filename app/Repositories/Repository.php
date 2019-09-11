<?php

namespace App\Repositories;

use App\Repositories\Contracts\Repository as RepositoryContract;
use Illuminate\Container\Container as Application;
use Illuminate\Log\Logger;
use Prettus\Repository\Eloquent\BaseRepository;

abstract class Repository extends BaseRepository implements RepositoryContract
{
    /**
     * @var Logger
     */
    protected $log;

    /**
     * Repository constructor.
     *
     * @param  Application  $app
     * @param  Logger  $log
     */
    public function __construct(Application $app, Logger $log)
    {
        parent::__construct($app);

        $this->log = $log;
    }

    /**
     * Calling model's default functions.
     *
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->model, $method], $args);
    }

    /**
     * Retrieve the "count" result of the query.
     *
     * @param  string  $columns
     * @return int
     */
    public function count($columns = '*')
    {
        $this->applyCriteria();
        $this->applyScope();

        return $this->model->count($columns);
    }

    /**
     * Reset all criteria, scopes and model.
     *
     * @return $this
     */
    public function reset()
    {
        $this->resetCriteria();
        $this->resetModel();
        $this->resetScope();

        return $this;
    }

    /**
     * Make apply criteria public.
     *
     * @return Repository
     */
    public function applyCriteria()
    {
        parent::applyCriteria();

        return $this;
    }
}
