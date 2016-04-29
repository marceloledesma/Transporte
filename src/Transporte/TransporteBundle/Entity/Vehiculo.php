<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Vehiculo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Vehiculo {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $patente;

    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\TipoVehiculo", inversedBy="vehiculos")
     * @ORM\JoinColumn(name="tipoVechiculo_id", referencedColumnName="id", nullable=false)
     */
    protected $tipoVechiculo;

    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\Marca", inversedBy="vehiculos")
     * @ORM\JoinColumn(name="marca_id", referencedColumnName="id", nullable=false)
     */
    protected $marca;

    /**
     * @ORM\Column(type="string")
     */
    private $modelo;

    /**
     * @ORM\Column(type="integer")
     */
    private $cilindrada;

    /**
     * @ORM\Column(type="integer")
     */
    private $anio;

    /**
     * @ORM\Column(type="string")
     */
    private $nroChasis;

    /**
     * @ORM\Column(type="string")
     */
    private $nroMotor;

    /**
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\Poliza", mappedBy="vehiculo", cascade={"all"})
     */
    protected $polizas;
    
    /**
     * @ORM\ManyToMany(targetEntity="Transporte\TransporteBundle\Entity\Propietario", mappedBy="vehiculos")
     */
    protected $propietarios;

    /**
     * @ORM\ManyToMany(targetEntity="Transporte\TransporteBundle\Entity\Chofer", mappedBy="vehiculos")
     */
    protected $choferes;

    /**
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\Contrato", mappedBy="vehiculo", cascade={"all"})
     */
    protected $contratos;

    function __construct() {
        $this->propietarios = new ArrayCollection();
        $this->choferes = new ArrayCollection();
        $this->polizas = new ArrayCollection();
        $this->contratos = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getPatente() {
        return $this->patente;
    }

    public function getTipoVechiculo() {
        return $this->tipoVechiculo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getCilindrada() {
        return $this->cilindrada;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function getNroChasis() {
        return $this->nroChasis;
    }

    public function getNroMotor() {
        return $this->nroMotor;
    }

    public function getPolizas() {
        return $this->polizas;
    }

    public function getPropietarios() {
        return $this->propietarios;
    }

    public function getChoferes() {
        return $this->choferes;
    }

    public function getContratos() {
        return $this->contratos;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPatente($patente) {
        $this->patente = $patente;
    }

    public function setTipoVechiculo($tipoVechiculo) {
        $this->tipoVechiculo = $tipoVechiculo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setCilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }

    public function setAnio($anio) {
        $this->anio = $anio;
    }

    public function setNroChasis($nroChasis) {
        $this->nroChasis = $nroChasis;
    }

    public function setNroMotor($nroMotor) {
        $this->nroMotor = $nroMotor;
    }

    public function setPolizas($polizas) {
        $this->polizas = $polizas;
        foreach ($polizas as $poliza) {
            $poliza->setVehiculo($this);
        }
    }

    public function setPropietarios($propietarios) {
        $this->propietarios = $propietarios;
        foreach ($propietarios as $propietario) {
            $propietario->setVehiculo($this);
        }
    }

    public function setPropietario($propietario) {
        $this->propietario = $propietario;
    }

    public function setChoferes($choferes) {
        $this->choferes = $choferes;
        foreach ($choferes as $chofer) {
            $chofer->setVehiculo($this);
        }
    }
    
    public function setChofer($chofer) {
        $this->chofer = $chofer;
    }
    
    public function setContratos($contratos) {
        $this->contratos = $contratos;
        foreach ($contratos as $contrato) {
            $contrato->setVehiculo($this);
        }
    }

    public function __toString() {
        return $this->patente;
    }

}
