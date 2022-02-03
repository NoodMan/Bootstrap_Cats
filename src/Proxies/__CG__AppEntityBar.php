<?php

namespace DoctrineProxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Bar extends \App\Entity\Bar implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'sign', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'salons', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'cashiers', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'cats', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'manager'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'sign', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'salons', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'cashiers', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'cats', '' . "\0" . 'App\\Entity\\Bar' . "\0" . 'manager'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Bar $proxy) {
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
    public function getId(): string
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
    public function getSign(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSign', []);

        return parent::getSign();
    }

    /**
     * {@inheritDoc}
     */
    public function setSign(string $sign): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSign', [$sign]);

        return parent::setSign($sign);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(string $address): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function addSalon(\App\Entity\Salon $salon): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSalon', [$salon]);

        return parent::addSalon($salon);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSalon(\App\Entity\Salon $salon): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSalon', [$salon]);

        return parent::removeSalon($salon);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalons(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalons', []);

        return parent::getSalons();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalons(\Doctrine\Common\Collections\Collection $salons): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalons', [$salons]);

        return parent::setSalons($salons);
    }

    /**
     * {@inheritDoc}
     */
    public function getManager(): ?\App\Entity\Manager
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getManager', []);

        return parent::getManager();
    }

    /**
     * {@inheritDoc}
     */
    public function setManager(?\App\Entity\Manager $manager): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManager', [$manager]);

        return parent::setManager($manager);
    }

    /**
     * {@inheritDoc}
     */
    public function addCashiers(\App\Entity\Cashier $cashier): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCashiers', [$cashier]);

        return parent::addCashiers($cashier);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCashiers(\App\Entity\Cashier $cashier): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCashiers', [$cashier]);

        return parent::removeCashiers($cashier);
    }

    /**
     * {@inheritDoc}
     */
    public function getCashiers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCashiers', []);

        return parent::getCashiers();
    }

    /**
     * {@inheritDoc}
     */
    public function setCashiers(\Doctrine\Common\Collections\Collection $cashiers): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCashiers', [$cashiers]);

        return parent::setCashiers($cashiers);
    }

    /**
     * {@inheritDoc}
     */
    public function addCats(\App\Entity\Cat $cat): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCats', [$cat]);

        return parent::addCats($cat);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCats(\App\Entity\Cat $cat): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCats', [$cat]);

        return parent::removeCats($cat);
    }

    /**
     * {@inheritDoc}
     */
    public function getCats(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCats', []);

        return parent::getCats();
    }

    /**
     * {@inheritDoc}
     */
    public function setCats(\Doctrine\Common\Collections\Collection $cats): \App\Entity\Bar
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCats', [$cats]);

        return parent::setCats($cats);
    }

}