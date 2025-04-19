<?php

include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';
class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera9417 = null;
    private $initializer4c1bc = null;
    private static $publicProperties217ad = [
        
    ];
    public function setDefaultPaginatorOptions(array $options)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->setDefaultPaginatorOptions($options);
    }
    public function paginate($target, $page = 1, $limit = 10, array $options = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->paginate($target, $page, $limit, $options);
    }
    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->subscribe($subscriber);
    }
    public function connect($eventName, $listener, $priority = 0)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->connect($eventName, $listener, $priority);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eventDispatcher, $instance->defaultOptions);
        $instance->initializer4c1bc = $initializer;
        return $instance;
    }
    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null)
    {
        static $reflection;
        if (! $this->valueHoldera9417) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHoldera9417 = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions);
        }
        $this->valueHoldera9417->__construct($eventDispatcher);
    }
    public function & __get($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__get', ['name' => $name], $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        if (isset(self::$publicProperties217ad[$name])) {
            return $this->valueHoldera9417->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9417;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera9417;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9417;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera9417;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__isset', array('name' => $name), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9417;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera9417;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__unset', array('name' => $name), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9417;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera9417;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__clone', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        $this->valueHoldera9417 = clone $this->valueHoldera9417;
    }
    public function __sleep()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__sleep', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return array('valueHoldera9417');
    }
    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4c1bc = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4c1bc;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'initializeProxy', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera9417;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera9417;
    }
}
