<?php
/**
 * YAWIK
 *
 * @filesource
 * @copyright (c) 2013 Cross Solution (http://cross-solution.de)
 * @license   AGPLv3
 */

/** NewJobFactory.php */ 
namespace Jobs\Form;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class NewJobFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $form        = new Job();
        $inputFilter = $serviceLocator
                     ->getServiceLocator()
                     ->get('InputFilterManager')
                     ->get('Jobs/NewJob');
        
        $form->setInputFilter($inputFilter);
        
        return $form;
    }
}
