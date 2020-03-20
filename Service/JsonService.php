<?php

namespace RedlabTeam\HelpersBundle\Service;

use Psr\Log\LoggerInterface,
    RedlabTeam\Helper\Json;

/**
 * Class JsonService
 *
 * This class is the same as the Json Helper with the possibility of logging debug and notices
 *
 * @package RedlabTeam\HelpersBundle
 *
 * @author Jean-Baptiste Motto <motto@redlab.io>
 */
class JsonService extends Json
{
    use HelpersServiceTrait;

    /**
     * JsonService constructor.
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

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function decode(?string $string, bool $assoc = false, int $depth = 512, int $options = 0)
    {
        $this->debugLog($string);

        $returnValue = parent::decode($string, $assoc, $depth, $options);

        if ($this->hasError()) {
            $this->noticeLog($this->getLastErrorMessage());
        }

        return $returnValue;
    }

    /**
     * {@inheritdoc}
     */
    public function encode($value, int $options = 0, int $depth = 512): ?string
    {
        $this->debugLog($value);

        $returnValue = parent::encode($value, $options, $depth);

        if ($this->hasError()) {
            $this->noticeLog($this->getLastErrorMessage());
        }

        return $returnValue;
    }
}