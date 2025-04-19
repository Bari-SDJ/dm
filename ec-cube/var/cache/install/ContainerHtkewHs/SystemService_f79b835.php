<?php

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/SystemService.php';
class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera9417 = null;
    private $initializer4c1bc = null;
    private static $publicProperties217ad = [
        
    ];
    public function getDbversion()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getDbversion', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->getDbversion();
    }
    public function canSetMemoryLimit($memory)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->canSetMemoryLimit($memory);
    }
    public function getMemoryLimit()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getMemoryLimit', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->getMemoryLimit();
    }
    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance')
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->switchMaintenance($isEnable, $mode);
    }
    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\PostResponseEvent $event)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->disableMaintenanceEvent($event);
    }
    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->disableMaintenance($mode);
    }
    public function isMaintenanceMode()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'isMaintenanceMode', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->isMaintenanceMode();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->entityManager, $instance->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);
        $instance->initializer4c1bc = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;
        if (! $this->valueHoldera9417) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHoldera9417 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
        }
        $this->valueHoldera9417->__construct($entityManager, $container);
    }
    public function & __get($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__get', ['name' => $name], $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        if (isset(self::$publicProperties217ad[$name])) {
            return $this->valueHoldera9417->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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
