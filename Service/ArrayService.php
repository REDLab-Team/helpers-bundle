<?php

namespace RedlabTeam\HelpersBundle\Service;

use Psr\Log\LoggerInterface,
    RedlabTeam\Helper\Arr;

/**
 * Class ArrayService
 *
 * This class is the same as the Arr Helper with the possibility of logging debug and notices
 *
 * @package RedlabTeam\HelpersBundle
 *
 * @author Jean-Baptiste Motto <motto@redlab.io>
 */
class ArrayService extends Arr
{
    use HelpersServiceTrait;

    /**
     * ArrayService constructor.
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

    /**
     * {@inheritDoc}
     */
    public function exists($value, array $array, $strict = false): bool
    {
        $this->debugLog($value);
        $this->debugLog($array);

        return parent::exists($value, $array, $strict);
    }

    /**
     * {@inheritDoc}
     */
    public function keys(array $array, $searchValue = null, bool $strict = false): array
    {
        $this->debugLog($array);
        $this->debugLog($searchValue);

        return parent::keys($array, $searchValue, $strict);
    }

    /**
     * {@inheritDoc}
     */
    public function values(array $array): array
    {
        $this->debugLog($array);

        return parent::values($array);
    }

    /**
     * {@inheritDoc}
     */
    public function changeKeysCase(array $array, int $case = CASE_LOWER): array
    {
        $this->debugLog($array);
        $this->debugLog($case);

        return parent::changeKeysCase($array, $case);
    }
}