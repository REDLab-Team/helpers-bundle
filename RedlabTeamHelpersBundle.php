<?php

namespace RedlabTeam\HelpersBundle;

use RedlabTeam\HelpersBundle\DependencyInjection\RedlabTeamHelperExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Jean-Baptiste MOTTO <motto@redlab.io>
 */
class RedlabTeamHelpersBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new RedlabTeamHelperExtension();
    }
}