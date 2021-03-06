<?php
/**
 * YAWIK
 *
 * @filesource
 * @license MIT
 * @copyright  2013 - 2017 Cross Solution <http://cross-solution.de>
 */
  
/** */
namespace Jobs\Factory\Listener;

use Interop\Container\ContainerInterface;
use Jobs\Listener\GetOrganizationManagers;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ${CARET}
 * 
 * @author Mathias Gelhausen <gelhausen@cross-solution.de>
 * @todo write test 
 */
class GetOrganizationManagersFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = [])
    {
        $repositories = $container->get('repositories');
        $repository   = $repositories->get('Organizations');
        $listener     = new GetOrganizationManagers($repository);

        return $listener;
    }

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $this($serviceLocator, GetOrganizationManagers::class);
    }
}