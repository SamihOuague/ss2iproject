<?php

namespace ContainerXWpzfkx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2e54f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer13677 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0c74 = [
        
    ];

    public function getConnection()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getConnection', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getMetadataFactory', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getExpressionBuilder', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'beginTransaction', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getCache', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'transactional', array('func' => $func), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->transactional($func);
    }

    public function commit()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'commit', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->commit();
    }

    public function rollback()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'rollback', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getClassMetadata', array('className' => $className), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'createQuery', array('dql' => $dql), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'createNamedQuery', array('name' => $name), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'createQueryBuilder', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'flush', array('entity' => $entity), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'clear', array('entityName' => $entityName), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->clear($entityName);
    }

    public function close()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'close', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->close();
    }

    public function persist($entity)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'persist', array('entity' => $entity), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'remove', array('entity' => $entity), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'refresh', array('entity' => $entity), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'detach', array('entity' => $entity), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'merge', array('entity' => $entity), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'contains', array('entity' => $entity), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getEventManager', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getConfiguration', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'isOpen', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getUnitOfWork', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getProxyFactory', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'initializeObject', array('obj' => $obj), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'getFilters', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'isFiltersStateClean', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'hasFilters', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return $this->valueHolder2e54f->hasFilters();
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

        $instance->initializer13677 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2e54f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2e54f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2e54f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, '__get', ['name' => $name], $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        if (isset(self::$publicPropertiesf0c74[$name])) {
            return $this->valueHolder2e54f->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e54f;

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

        $targetObject = $this->valueHolder2e54f;
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
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e54f;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder2e54f;
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
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, '__isset', array('name' => $name), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e54f;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2e54f;
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
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, '__unset', array('name' => $name), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e54f;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2e54f;
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
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, '__clone', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        $this->valueHolder2e54f = clone $this->valueHolder2e54f;
    }

    public function __sleep()
    {
        $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, '__sleep', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;

        return array('valueHolder2e54f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer13677 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer13677;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer13677 && ($this->initializer13677->__invoke($valueHolder2e54f, $this, 'initializeProxy', array(), $this->initializer13677) || 1) && $this->valueHolder2e54f = $valueHolder2e54f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2e54f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2e54f;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
