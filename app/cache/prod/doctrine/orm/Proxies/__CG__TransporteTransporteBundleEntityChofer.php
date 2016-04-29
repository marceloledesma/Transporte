<?php

namespace Proxies\__CG__\Transporte\TransporteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Chofer extends \Transporte\TransporteBundle\Entity\Chofer implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Chofer' . "\0" . 'id', 'vehiculos', 'persona', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Chofer' . "\0" . 'carnet', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Chofer' . "\0" . 'vtoCarnet', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Chofer' . "\0" . 'vtoLibretaSanitaria');
        }

        return array('__isInitialized__', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Chofer' . "\0" . 'id', 'vehiculos', 'persona', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Chofer' . "\0" . 'carnet', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Chofer' . "\0" . 'vtoCarnet', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Chofer' . "\0" . 'vtoLibretaSanitaria');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Chofer $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getVehiculos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVehiculos', array());

        return parent::getVehiculos();
    }

    /**
     * {@inheritDoc}
     */
    public function getPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersona', array());

        return parent::getPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function getCarnet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarnet', array());

        return parent::getCarnet();
    }

    /**
     * {@inheritDoc}
     */
    public function getVtoCarnet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVtoCarnet', array());

        return parent::getVtoCarnet();
    }

    /**
     * {@inheritDoc}
     */
    public function getVtoLibretaSanitaria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVtoLibretaSanitaria', array());

        return parent::getVtoLibretaSanitaria();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setVehiculos($vehiculos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVehiculos', array($vehiculos));

        return parent::setVehiculos($vehiculos);
    }

    /**
     * {@inheritDoc}
     */
    public function setVehiculo($vehiculo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVehiculo', array($vehiculo));

        return parent::setVehiculo($vehiculo);
    }

    /**
     * {@inheritDoc}
     */
    public function setPersona($persona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersona', array($persona));

        return parent::setPersona($persona);
    }

    /**
     * {@inheritDoc}
     */
    public function setCarnet($carnet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarnet', array($carnet));

        return parent::setCarnet($carnet);
    }

    /**
     * {@inheritDoc}
     */
    public function setVtoCarnet($vtoCarnet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVtoCarnet', array($vtoCarnet));

        return parent::setVtoCarnet($vtoCarnet);
    }

    /**
     * {@inheritDoc}
     */
    public function setVtoLibretaSanitaria($vtoLibretaSanitaria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVtoLibretaSanitaria', array($vtoLibretaSanitaria));

        return parent::setVtoLibretaSanitaria($vtoLibretaSanitaria);
    }

}
