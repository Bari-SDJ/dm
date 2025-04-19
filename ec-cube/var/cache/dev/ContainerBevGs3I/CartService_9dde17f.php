<?php
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/CartService.php';

class CartService_9dde17f extends \Eccube\Service\CartService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Service\CartService|null wrapped object, if the proxy is initialized
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

    public function getCarts($empty_delete = false)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getCarts', array('empty_delete' => $empty_delete), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getCarts($empty_delete);
    }

    public function getPersistedCarts()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getPersistedCarts', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getPersistedCarts();
    }

    public function getSessionCarts()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getSessionCarts', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getSessionCarts();
    }

    public function mergeFromPersistedCart()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'mergeFromPersistedCart', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->mergeFromPersistedCart();
    }

    public function getCart()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getCart', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getCart();
    }

    public function addProduct($ProductClass, $quantity = 1)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'addProduct', array('ProductClass' => $ProductClass, 'quantity' => $quantity), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->addProduct($ProductClass, $quantity);
    }

    public function removeProduct($ProductClass)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'removeProduct', array('ProductClass' => $ProductClass), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->removeProduct($ProductClass);
    }

    public function save()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'save', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->save();
    }

    public function setPreOrderId($pre_order_id)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'setPreOrderId', array('pre_order_id' => $pre_order_id), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->setPreOrderId($pre_order_id);
    }

    public function getPreOrderId()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'getPreOrderId', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->getPreOrderId();
    }

    public function clear()
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'clear', array(), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->clear();
    }

    public function setCartItemComparator($cartItemComparator)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'setCartItemComparator', array('cartItemComparator' => $cartItemComparator), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->setCartItemComparator($cartItemComparator);
    }

    public function setPrimary($cartKey)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, 'setPrimary', array('cartKey' => $cartKey), $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        return $this->valueHoldera9417->setPrimary($cartKey);
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

        unset($instance->carts, $instance->session, $instance->entityManager, $instance->cart, $instance->productClassRepository, $instance->cartRepository, $instance->cartItemComparator, $instance->cartItemAllocator, $instance->orderRepository, $instance->tokenStorage, $instance->authorizationChecker);

        $instance->initializer4c1bc = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\HttpFoundation\Session\SessionInterface $session, \Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\ProductClassRepository $productClassRepository, \Eccube\Repository\CartRepository $cartRepository, \Eccube\Service\Cart\CartItemComparator $cartItemComparator, \Eccube\Service\Cart\CartItemAllocator $cartItemAllocator, \Eccube\Repository\OrderRepository $orderRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker)
    {
        static $reflection;

        if (! $this->valueHoldera9417) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\CartService');
            $this->valueHoldera9417 = $reflection->newInstanceWithoutConstructor();
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);

        }

        $this->valueHoldera9417->__construct($session, $entityManager, $productClassRepository, $cartRepository, $cartItemComparator, $cartItemAllocator, $orderRepository, $tokenStorage, $authorizationChecker);
    }

    public function & __get($name)
    {
        $this->initializer4c1bc && ($this->initializer4c1bc->__invoke($valueHoldera9417, $this, '__get', ['name' => $name], $this->initializer4c1bc) || 1) && $this->valueHoldera9417 = $valueHoldera9417;

        if (isset(self::$publicProperties217ad[$name])) {
            return $this->valueHoldera9417->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
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
