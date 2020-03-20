<?php

namespace RedlabTeam\HelpersBundle\Service;

use Psr\Log\LoggerInterface;

/**
 * Trait HelpersServiceTrait
 *
 * @package RedlabTeam\HelpersBundle
 *
 * @author Jean-Baptiste Motto <motto@redlab.io>
 */
trait HelpersServiceTrait
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var bool
     */
    protected $debug;

    /**
     * @var bool
     */
    protected $noticeFailure;

    /**
     * Return the $value parameter for using into logs.
     *
     * @param $value
     *
     * @return bool|float|int|string|true
     */
    private function formatLog($value)
    {
        return \is_scalar($value) ? $value : print_r($value, true);
    }

    /**
     * Write debug log if the $debug attribute is set to true.
     *
     * @param $value
     *
     * @return void
     */
    protected function debugLog($value): void
    {
        if ($this->debug === true) {
            $this->logger->debug($this->formatLog($value));
        }
    }

    /**
     * Write notice log if the $noticeFailure attribute is set to true.
     *
     * @param $value
     *
     * @return void
     */
    protected function noticeLog($value): void
    {
        if ($this->noticeFailure === true) {
            $this->logger->notice($this->formatLog($value));
        }
    }
}