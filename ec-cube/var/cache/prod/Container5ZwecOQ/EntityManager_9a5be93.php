<?php
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera9417 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4c1bc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties217ad = [
        
    ];

    public function getConnection()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getConnection', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getMetadataFactory', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getExpressionBuilder', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'beginTransaction', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getCache', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'transactional', array('func' => $func), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->transactional($func);
    }

    public function commit()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'commit', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->commit();
    }

    public function rollback()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'rollback', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getClassMetadata', array('className' => $className), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createQuery', array('dql' => $dql), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createNamedQuery', array('name' => $name), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createQueryBuilder', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'flush', array('entity' => $entity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'clear', array('entityName' => $entityName), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->clear($entityName);
    }

    public function close()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'close', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->close();
    }

    public function persist($entity)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'persist', array('entity' => $entity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'remove', array('entity' => $entity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'refresh', array('entity' => $entity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'detach', array('entity' => $entity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'merge', array('entity' => $entity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'contains', array('entity' => $entity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getEventManager', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getConfiguration', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'isOpen', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getUnitOfWork', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getProxyFactory', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'initializeObject', array('obj' => $obj), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getFilters', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'isFiltersStateClean', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'hasFilters', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer4c1bc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera9417) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera9417 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera9417->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__get', ['name' => $name], $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        if (isset(self::$publicProperties217ad[$name])) {
            return $this->valueHoldera9417->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
