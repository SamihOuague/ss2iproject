<?php

namespace ContainerOb14xVx;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder77874 = null;
    private $initializerd3d95 = null;
    private static $publicProperties4672f = [
        
    ];
    public function getConnection()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getConnection', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getMetadataFactory', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getExpressionBuilder', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'beginTransaction', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getCache', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'transactional', array('func' => $func), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->transactional($func);
    }
    public function commit()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'commit', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->commit();
    }
    public function rollback()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'rollback', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getClassMetadata', array('className' => $className), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'createQuery', array('dql' => $dql), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'createNamedQuery', array('name' => $name), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'createQueryBuilder', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'flush', array('entity' => $entity), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'clear', array('entityName' => $entityName), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->clear($entityName);
    }
    public function close()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'close', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->close();
    }
    public function persist($entity)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'persist', array('entity' => $entity), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'remove', array('entity' => $entity), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'refresh', array('entity' => $entity), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'detach', array('entity' => $entity), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'merge', array('entity' => $entity), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'contains', array('entity' => $entity), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getEventManager', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getConfiguration', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'isOpen', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getUnitOfWork', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getProxyFactory', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'initializeObject', array('obj' => $obj), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'getFilters', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'isFiltersStateClean', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'hasFilters', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return $this->valueHolder77874->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd3d95 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder77874) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder77874 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder77874->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, '__get', ['name' => $name], $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        if (isset(self::$publicProperties4672f[$name])) {
            return $this->valueHolder77874->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77874;
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
        $targetObject = $this->valueHolder77874;
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
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77874;
            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder77874;
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
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, '__isset', array('name' => $name), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77874;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder77874;
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
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, '__unset', array('name' => $name), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77874;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder77874;
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
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, '__clone', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        $this->valueHolder77874 = clone $this->valueHolder77874;
    }
    public function __sleep()
    {
        $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, '__sleep', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
        return array('valueHolder77874');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd3d95 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd3d95;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd3d95 && ($this->initializerd3d95->__invoke($valueHolder77874, $this, 'initializeProxy', array(), $this->initializerd3d95) || 1) && $this->valueHolder77874 = $valueHolder77874;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder77874;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder77874;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
