<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DistributionClearanceType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class DistributionClearanceType extends AbstractSimpleType
{
    const _DESTINATION_COUNTRY_CLEARANCE = 'DESTINATION_COUNTRY_CLEARANCE';
    const _SINGLE_POINT_OF_CLEARANCE = 'SINGLE_POINT_OF_CLEARANCE';
}
