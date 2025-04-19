<?php

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera9417 = null;
    private $initializer4c1bc = null;
    private static $publicProperties217ad = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'installWithCode', array('code' => $code), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'preInstall', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createTempDir', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'deleteDirs', array('arr' => $arr), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'checkSymbolName', array('string' => $string), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'deleteFile', array('path' => $path), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'checkSamePlugin', array('code' => $code), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'calcPluginDir', array('code' => $code), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'createPluginDir', array('d' => $d), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'unregisterPlugin', array('p' => $p), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'disable', array('plugin' => $plugin), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        return $this->valueHoldera9417->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializer4c1bc = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHoldera9417) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHoldera9417 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHoldera9417->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__get', ['name' => $name], $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;
        if (isset(self::$publicProperties217ad[$name])) {
            return $this->valueHoldera9417->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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
