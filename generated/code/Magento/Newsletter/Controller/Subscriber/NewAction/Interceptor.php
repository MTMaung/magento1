<?php
namespace Magento\Newsletter\Controller\Subscriber\NewAction;

/**
 * Interceptor class for @see \Magento\Newsletter\Controller\Subscriber\NewAction
 */
class Interceptor extends \Magento\Newsletter\Controller\Subscriber\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Url $customerUrl, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Newsletter\Model\SubscriptionManagerInterface $subscriptionManager, ?\Magento\Framework\Validator\EmailAddress $emailValidator = null, ?\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository = null, ?\Magento\Newsletter\Model\Config $newsletterConfig = null)
    {
        $this->___init();
        parent::__construct($context, $subscriberFactory, $customerSession, $storeManager, $customerUrl, $customerAccountManagement, $subscriptionManager, $emailValidator, $customerRepository, $newsletterConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}
