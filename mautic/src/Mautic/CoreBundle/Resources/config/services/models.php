<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;

//Audit log model
$container->setDefinition(
    'mautic.model.auditlog',
    new Definition(
        'Mautic\CoreBundle\Model\AuditLogModel',
        array(
            new Reference('service_container'),
            new Reference('request_stack'),
            new Reference('doctrine.orm.entity_manager'),
        )
    )
);