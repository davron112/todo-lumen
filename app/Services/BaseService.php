<?php

namespace App\Services;

use App\Repositories\Contracts\Repository;
use Exception;
use Illuminate\Database\DatabaseManager;
use Illuminate\Log\Logger;

abstract class BaseService
{
    /**
     * @var \Illuminate\Database\DatabaseManager
     */
    protected $databaseManager;

    /**
     * @var string
     */
    protected $error;

    /**
     * @var \Illuminate\Log\Logger
     */
    protected $logger;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * BaseService constructor.
     *
     * @param DatabaseManager $databaseManager
     * @param Logger $logger
     * @param Repository $repository
     */
    public function __construct(DatabaseManager $databaseManager, Logger $logger, Repository $repository)
    {
        $this->databaseManager = $databaseManager;
        $this->logger          = $logger;
        $this->repository      = $repository;
    }

    /**
     * Start a new database transaction.
     *
     * @return void
     * @throws Exception
     */
    protected function beginTransaction()
    {
        $this->databaseManager->beginTransaction();
    }

    /**
     * Rollback the active database transaction.
     *
     * @param \Exception $e
     * @param string $message
     * @param array $context
     * @return bool
     * @throws Exception
     */
    protected function rollback(Exception $e, $message = '', $context = []): bool
    {
        $this->databaseManager->rollBack();
        $this->logError($e, $message, $context);

        return false;
    }

    /**
     * Write occurred error to logs.
     *
     * @param  Exception $e
     * @param  string $message
     * @param  array $context
     * @return void
     */
    protected function logError(Exception $e, $message = '', $context = []): void
    {
        $this->logger->error($message, $context);
        $this->logger->error($e);
    }

    /**
     * Commit the active database transaction.
     *
     * @return void
     */
    protected function commit()
    {
        $this->databaseManager->commit();
    }

    /**
     * Set error for user.
     * For example, can be used in controllers.
     *
     * @param  string  $error
     */
    protected function error($error)
    {
        $this->logger->error($error);
        $this->error = $error;
    }

    /**
     * Get last error message.
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set message.
     *
     * @param string $message
     */
    protected function message($message)
    {
        $this->logger->info('Added message', [
            'message' => $message,
        ]);
        $this->message = $message;
    }

    /**
     * Get message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
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
        return call_user_func_array([$this->repository, $method], $args);
    }
}
