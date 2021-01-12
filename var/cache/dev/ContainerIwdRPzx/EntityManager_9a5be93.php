<?php

namespace ContainerIwdRPzx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder79bea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00035 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfbfed = [
        
    ];

    public function getConnection()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getConnection', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getMetadataFactory', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getExpressionBuilder', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'beginTransaction', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getCache', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'transactional', array('func' => $func), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->transactional($func);
    }

    public function commit()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'commit', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->commit();
    }

    public function rollback()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'rollback', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getClassMetadata', array('className' => $className), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'createQuery', array('dql' => $dql), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'createNamedQuery', array('name' => $name), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'createQueryBuilder', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'flush', array('entity' => $entity), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'clear', array('entityName' => $entityName), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->clear($entityName);
    }

    public function close()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'close', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->close();
    }

    public function persist($entity)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'persist', array('entity' => $entity), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'remove', array('entity' => $entity), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'refresh', array('entity' => $entity), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'detach', array('entity' => $entity), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'merge', array('entity' => $entity), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'contains', array('entity' => $entity), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getEventManager', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getConfiguration', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'isOpen', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getUnitOfWork', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getProxyFactory', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'initializeObject', array('obj' => $obj), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'getFilters', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'isFiltersStateClean', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'hasFilters', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return $this->valueHolder79bea->hasFilters();
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

        $instance->initializer00035 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder79bea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder79bea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder79bea->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, '__get', ['name' => $name], $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        if (isset(self::$publicPropertiesfbfed[$name])) {
            return $this->valueHolder79bea->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79bea;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder79bea;
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
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79bea;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder79bea;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, '__isset', array('name' => $name), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79bea;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder79bea;
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
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, '__unset', array('name' => $name), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79bea;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder79bea;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, '__clone', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        $this->valueHolder79bea = clone $this->valueHolder79bea;
    }

    public function __sleep()
    {
        $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, '__sleep', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;

        return array('valueHolder79bea');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00035 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00035;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00035 && ($this->initializer00035->__invoke($valueHolder79bea, $this, 'initializeProxy', array(), $this->initializer00035) || 1) && $this->valueHolder79bea = $valueHolder79bea;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder79bea;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder79bea;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
