<?php
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerApiService.php';

class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Service\Composer\ComposerApiService|null wrapped object, if the proxy is initialized
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

    public function execInfo($pluginName, $version)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->execInfo($pluginName, $version);
    }

    public function execRequire($packageName, $output = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->execRequire($packageName, $output);
    }

    public function execRemove($packageName, $output = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->execRemove($packageName, $output);
    }

    public function execUpdate($dryRun, $output = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->execUpdate($dryRun, $output);
    }

    public function execInstall($dryRun, $output = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->execInstall($dryRun, $output);
    }

    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
    }

    public function execConfig($key, $value = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->execConfig($key, $value);
    }

    public function getConfig()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getConfig', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getConfig();
    }

    public function setWorkingDir($workingDir)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->setWorkingDir($workingDir);
    }

    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->runCommand($commands, $output, $init);
    }

    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->configureRepository($BaseInfo);
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

        unset($instance->eccubeConfig);

        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);

        $instance->initializer4c1bc = $initializer;

        return $instance;
    }

    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;

        if (! $this->valueHoldera9417) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHoldera9417 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);

        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);

        }

        $this->valueHoldera9417->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }

    public function & __get($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__get', ['name' => $name], $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        if (isset(self::$publicProperties217ad[$name])) {
            return $this->valueHoldera9417->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');

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
        unset($this->eccubeConfig);

        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
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
