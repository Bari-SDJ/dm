<?php
include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Log/Logger.php';

class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Log\Logger|null wrapped object, if the proxy is initialized
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

    public function log($level, $message, array $context = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->log($level, $message, $context);
    }

    public function emergency($message, array $context = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->emergency($message, $context);
    }

    public function alert($message, array $context = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->alert($message, $context);
    }

    public function critical($message, array $context = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->critical($message, $context);
    }

    public function error($message, array $context = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'error', array('message' => $message, 'context' => $context), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->error($message, $context);
    }

    public function warning($message, array $context = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->warning($message, $context);
    }

    public function notice($message, array $context = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->notice($message, $context);
    }

    public function info($message, array $context = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'info', array('message' => $message, 'context' => $context), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->info($message, $context);
    }

    public function debug($message, array $context = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->debug($message, $context);
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

        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);

        $instance->initializer4c1bc = $initializer;

        return $instance;
    }

    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;

        if (! $this->valueHoldera9417) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHoldera9417 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);

        }

        $this->valueHoldera9417->__construct($context, $logger, $frontLogger, $adminLogger);
    }

    public function & __get($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__get', ['name' => $name], $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        if (isset(self::$publicProperties217ad[$name])) {
            return $this->valueHoldera9417->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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
