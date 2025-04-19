<?php

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PluginRepository.php';
class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera9417 = null;
    private $initializer4c1bc = null;
    private static $publicProperties217ad = [
        
    ];
    public function findAllEnabled()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'findAllEnabled', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->findAllEnabled();
    }
    public function findByCode($code)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'findByCode', array('code' => $code), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->findByCode($code);
    }
    public function delete($entity)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'delete', array('entity' => $entity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->delete($entity);
    }
    public function save($entity)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'save', array('entity' => $entity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'clear', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'findAll', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'count', array('criteria' => $criteria), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getClassName', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'matching', array('criteria' => $criteria), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializer4c1bc = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Bridge\Doctrine\RegistryInterface $registry)
    {
        static $reflection;
        if (! $this->valueHoldera9417) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHoldera9417 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHoldera9417->__construct($registry);
    }
    public function & __get($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__get', ['name' => $name], $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        if (isset(self::$publicProperties217ad[$name])) {
            return $this->valueHoldera9417->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
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
