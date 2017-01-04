<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class IndexController
 */
class IndexController extends AbstractActionController
{
    /**
     * @return \Zend\Http\Response|ViewModel
     */
    public function indexAction()
    {
        if (class_exists('\ZF\Apigility\Admin\Module', false)) {
          return $this->redirect()->toRoute('zf-apigility/ui');
        }
        return new ViewModel();
    }
}
