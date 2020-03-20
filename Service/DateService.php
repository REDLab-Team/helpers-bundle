<?php

namespace RedlabTeam\HelpersBundle\Service;

use Psr\Log\LoggerInterface,
    RedlabTeam\Helper\Date;

/**
 * Class DateService
 *
 * This class is the same as the Date Helper with the possibility of logging debug and notices
 *
 * @package RedlabTeam\HelpersBundle
 *
 * @author Jean-Baptiste Motto <motto@redlab.io>
 */
class DateService extends Date
{
    use HelpersServiceTrait;

    /**
     * DateService constructor.
     *
     * @param LoggerInterface $logger
     * @param bool $debug
     * @param bool $noticeFailure
     */
    public function __construct(LoggerInterface $logger, bool $debug, bool $noticeFailure)
    {
        $this->logger = $logger;
        $this->debug = $debug;
        $this->noticeFailure = $noticeFailure;
    }
}