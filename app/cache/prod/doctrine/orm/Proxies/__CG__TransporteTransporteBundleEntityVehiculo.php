<?php

namespace Proxies\__CG__\Transporte\TransporteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vehiculo extends \Transporte\TransporteBundle\Entity\Vehiculo implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'id', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'patente', 'tipoVechiculo', 'marca', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'modelo', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'cilindrada', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'anio', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'nroChasis', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'nroMotor', 'polizas', 'propietarios', 'choferes', 'contratos');
        }

        return array('__isInitialized__', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'id', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'patente', 'tipoVechiculo', 'marca', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'modelo', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'cilindrada', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'anio', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'nroChasis', '' . "\0" . 'Transporte\\TransporteBundle\\Entity\\Vehiculo' . "\0" . 'nroMotor', 'polizas', 'propietarios', 'choferes', 'contratos');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Vehiculo $proxy) {
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
    public function getPatente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatente', array());

        return parent::getPatente();
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoVechiculo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoVechiculo', array());

        return parent::getTipoVechiculo();
    }

    /**
     * {@inheritDoc}
     */
    public function getMarca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarca', array());

        return parent::getMarca();
    }

    /**
     * {@inheritDoc}
     */
    public function getModelo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelo', array());

        return parent::getModelo();
    }

    /**
     * {@inheritDoc}
     */
    public function getCilindrada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCilindrada', array());

        return parent::getCilindrada();
    }

    /**
     * {@inheritDoc}
     */
    public function getAnio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnio', array());

        return parent::getAnio();
    }

    /**
     * {@inheritDoc}
     */
    public function getNroChasis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroChasis', array());

        return parent::getNroChasis();
    }

    /**
     * {@inheritDoc}
     */
    public function getNroMotor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroMotor', array());

        return parent::getNroMotor();
    }

    /**
     * {@inheritDoc}
     */
    public function getPolizas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPolizas', array());

        return parent::getPolizas();
    }

    /**
     * {@inheritDoc}
     */
    public function getPropietarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPropietarios', array());

        return parent::getPropietarios();
    }

    /**
     * {@inheritDoc}
     */
    public function getChoferes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChoferes', array());

        return parent::getChoferes();
    }

    /**
     * {@inheritDoc}
     */
    public function getContratos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContratos', array());

        return parent::getContratos();
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
    public function setPatente($patente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPatente', array($patente));

        return parent::setPatente($patente);
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoVechiculo($tipoVechiculo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoVechiculo', array($tipoVechiculo));

        return parent::setTipoVechiculo($tipoVechiculo);
    }

    /**
     * {@inheritDoc}
     */
    public function setMarca($marca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarca', array($marca));

        return parent::setMarca($marca);
    }

    /**
     * {@inheritDoc}
     */
    public function setModelo($modelo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModelo', array($modelo));

        return parent::setModelo($modelo);
    }

    /**
     * {@inheritDoc}
     */
    public function setCilindrada($cilindrada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCilindrada', array($cilindrada));

        return parent::setCilindrada($cilindrada);
    }

    /**
     * {@inheritDoc}
     */
    public function setAnio($anio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnio', array($anio));

        return parent::setAnio($anio);
    }

    /**
     * {@inheritDoc}
     */
    public function setNroChasis($nroChasis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroChasis', array($nroChasis));

        return parent::setNroChasis($nroChasis);
    }

    /**
     * {@inheritDoc}
     */
    public function setNroMotor($nroMotor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroMotor', array($nroMotor));

        return parent::setNroMotor($nroMotor);
    }

    /**
     * {@inheritDoc}
     */
    public function setPolizas($polizas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPolizas', array($polizas));

        return parent::setPolizas($polizas);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropietarios($propietarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropietarios', array($propietarios));

        return parent::setPropietarios($propietarios);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropietario($propietario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropietario', array($propietario));

        return parent::setPropietario($propietario);
    }

    /**
     * {@inheritDoc}
     */
    public function setChoferes($choferes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChoferes', array($choferes));

        return parent::setChoferes($choferes);
    }

    /**
     * {@inheritDoc}
     */
    public function setChofer($chofer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChofer', array($chofer));

        return parent::setChofer($chofer);
    }

    /**
     * {@inheritDoc}
     */
    public function setContratos($contratos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContratos', array($contratos));

        return parent::setContratos($contratos);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
