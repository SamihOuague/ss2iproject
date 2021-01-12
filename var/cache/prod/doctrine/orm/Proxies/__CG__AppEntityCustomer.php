<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Customer extends \App\Entity\Customer implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'lastname', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'vehicle', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'phone', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'zipcode', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'contract', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'siret', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'experience', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'valid', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'cv'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'lastname', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'vehicle', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'phone', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'zipcode', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'contract', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'siret', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'experience', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'valid', '' . "\0" . 'App\\Entity\\Customer' . "\0" . 'cv'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Customer $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\App\Entity\User $user): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname(string $firstname): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname(string $lastname): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender(string $gender): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getVehicle(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVehicle', []);

        return parent::getVehicle();
    }

    /**
     * {@inheritDoc}
     */
    public function setVehicle(bool $vehicle): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVehicle', [$vehicle]);

        return parent::setVehicle($vehicle);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone(string $phone): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipcode(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipcode', []);

        return parent::getZipcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipcode(int $zipcode): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipcode', [$zipcode]);

        return parent::setZipcode($zipcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getContract(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContract', []);

        return parent::getContract();
    }

    /**
     * {@inheritDoc}
     */
    public function setContract(string $contract): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContract', [$contract]);

        return parent::setContract($contract);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiret(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiret', []);

        return parent::getSiret();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiret(?string $siret): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiret', [$siret]);

        return parent::setSiret($siret);
    }

    /**
     * {@inheritDoc}
     */
    public function getExperience(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperience', []);

        return parent::getExperience();
    }

    /**
     * {@inheritDoc}
     */
    public function setExperience(?int $experience): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExperience', [$experience]);

        return parent::setExperience($experience);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole(string $role): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getValid(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValid', []);

        return parent::getValid();
    }

    /**
     * {@inheritDoc}
     */
    public function setValid(?bool $valid): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValid', [$valid]);

        return parent::setValid($valid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCv(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCv', []);

        return parent::getCv();
    }

    /**
     * {@inheritDoc}
     */
    public function setCv(?string $cv): \App\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCv', [$cv]);

        return parent::setCv($cv);
    }

}
