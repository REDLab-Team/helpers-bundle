# REDLab Helpers Bundle
A Bundle for Symfony 4+ with that provides simple PHP methods for OOP developments.

[![Latest Stable Version](https://img.shields.io/packagist/v/phpunit/phpunit.svg?style=flat-square)](https://packagist.org/packages/phpunit/phpunit)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.3-8892BF.svg?style=flat-square)](https://php.net/)
[![Latest Stable Version](https://poser.pugx.org/redlab-team/helpers-bundle/v/stable)](https://packagist.org/packages/redlab-team/helpers-bundle)
[![Total Downloads](https://poser.pugx.org/redlab-team/helpers-bundle/downloads)](https://packagist.org/packages/redlab-team/helpers-bundle)

## Installation
#### With composer :  
```bash
$ composer require redlab-team/helpers-bundle
```

## Configuration
The default configuration is into the [service.yml file](./Resources/config/services.yml).  
It is possible to override it into the configuration of your application.  
````yaml
parameters:
    # This variable allow the debug logs into the helpers methods
    redlabteam_helpers_debug: true
    # This variable allow the notice logs into the helpers methods
    redlabteam_helpers_notice_failure: true
services:
    # By default the Symfony minimalist Logger is used
    # It is possible to use another logger or just edit its parameters
    logger:
        class: Symfony\Component\HttpKernel\Log\Logger
        arguments:
            $minLevel: null
            $output: '%kernel.logs_dir%/%kernel.environment%.log'
            $formatter: null

    # Below are the helpers that can be used as services
    redlabteam_helpers.arr:
        class: RedlabTeam\Helper\Arr
    RedlabTeam\Helper\Arr: '@redlabteam_helpers.arr'

    redlabteam_helpers.date:
        class: RedlabTeam\Helper\Date
    RedlabTeam\Helper\Date: '@redlabteam_helpers.date'

    redlabteam_helpers.json:
        class: RedlabTeam\HelpersBundle\Service\JsonService
        arguments:
            $logger: '@logger'
            $debug: '%redlabteam_helpers_debug%'
            $noticeFailure: '%redlabteam_helpers_notice_failure%'
    RedlabTeam\HelpersBundle\Service\JsonService: '@redlabteam_helpers.json'

    redlabteam_helpers.str:
        class: RedlabTeam\Helper\Str
    RedlabTeam\Helper\Str: '@redlabteam_helpers.str'
```

## License
This package is released under the MIT License. See the [LICENSE](./LICENSE) file for more details.

