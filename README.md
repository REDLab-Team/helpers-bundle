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

## Usage
This bundle is based on the package `php-helpers` available [on this repository](https://github.com/REDLab-Team/php-helpers).  
The documentation of the helpers is in the [README.md file](https://github.com/REDLab-Team/php-helpers/blob/master/README.md).

## Configuration
The default configuration is into the [service.yml file](./Resources/config/services.yml).  
It is possible to override it into the configuration of your application.  
```yaml
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
    redlabteam_helpers.array:
        class: RedlabTeam\HelpersBundle\Service\ArrayService
        arguments:
            $logger: '@logger'
            $debug: '%redlabteam_helpers_debug%'
            $noticeFailure: '%redlabteam_helpers_notice_failure%'
    RedlabTeam\HelpersBundle\Service\ArrayService: '@redlabteam_helpers.array'

    redlabteam_helpers.date:
        class: RedlabTeam\HelpersBundle\Service\DateService
        arguments:
            $logger: '@logger'
            $debug: '%redlabteam_helpers_debug%'
            $noticeFailure: '%redlabteam_helpers_notice_failure%'
    RedlabTeam\HelpersBundle\Service\DateService: '@redlabteam_helpers.date'

    redlabteam_helpers.json:
        class: RedlabTeam\HelpersBundle\Service\JsonService
        arguments:
            $logger: '@logger'
            $debug: '%redlabteam_helpers_debug%'
            $noticeFailure: '%redlabteam_helpers_notice_failure%'
    RedlabTeam\HelpersBundle\Service\JsonService: '@redlabteam_helpers.json'

    redlabteam_helpers.string:
        class: RedlabTeam\HelpersBundle\Service\StringService
        arguments:
            $logger: '@logger'
            $debug: '%redlabteam_helpers_debug%'
            $noticeFailure: '%redlabteam_helpers_notice_failure%'
    RedlabTeam\HelpersBundle\Service\StringService: '@redlabteam_helpers.string'
```

## License
This package is released under the MIT License. See the [LICENSE](./LICENSE) file for more details.

