<?php
/**
 * YAWIK
 *
 * @filesource
 * @copyright (c) 2013 - 2016 Cross Solution (http://cross-solution.de)
 * @license   MIT
 * @author    weitz@cross-solution.de
 */

namespace Jobs\Factory\View\Helper;

use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Jobs\View\Helper\JobUrl;

/**
 * Factory for JobUrl view helper
 *
 * @author Carsten Bleek <bleek@cross-solution.de>
 */
class JobUrlFactory implements FactoryInterface
{
    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string             $requestedName
     * @param  null|array         $options
     *
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $helper    = new JobUrl();
        $url       = $container->get('url');
        $params    = $container->get('params');
        $serverUrl = $container->get('serverUrl');
        $helper->setUrlHelper($url)
               ->setParamsHelper($params)
               ->setServerUrlHelper($serverUrl);
        return $helper;
    }


    public function createService(ServiceLocatorInterface $services)
    {
        return $this($services, JobUrl::class);
    }
}
