<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Contrato
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contrato {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaAlta;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaBaja;

    /**
     * @ORM\Column(type="string")
     */
    private $expediente;

    /**
     * @ORM\Column(type="string")
     */
    private $movil;

    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\TipoServicio", inversedBy="contratos")
     * @ORM\JoinColumn(name="tipoServicio_id", referencedColumnName="id", nullable=false)
     */
    protected $tipoServicio;

    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\Vehiculo", inversedBy="contratos")
     * @ORM\JoinColumn(name="vehiculo_id", referencedColumnName="id", nullable=false)
     */
    protected $vehiculo;

    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\Empresa", inversedBy="contratos")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id", nullable=false)
     */
    protected $empresa;

    /**
     * @ORM\OneToOne(targetEntity="Transporte\TransporteBundle\Entity\Decreto", inversedBy="contrato")
     * @ORM\JoinColumn(name="decreto_id", referencedColumnName="id", nullable=false)
     */
    protected $decreto;

    /**
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\InspeccionMecanica", mappedBy="contrato", cascade={"all"})
     */
    protected $inspeccionesMecanicas;

    function __construct() {
        $this->inspeccionesMecanicas = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    public function getFechaBaja() {
        return $this->fechaBaja;
    }

    public function getExpediente() {
        return $this->expediente;
    }

    public function getMovil() {
        return $this->movil;
    }

    public function getTipoServicio() {
        return $this->tipoServicio;
    }

    public function getVehiculo() {
        return $this->vehiculo;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getDecreto() {
        return $this->decreto;
    }

    public function getInspeccionesMecanicas() {
        return $this->inspeccionesMecanicas;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }

    public function setFechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;
    }

    public function setExpediente($expediente) {
        $this->expediente = $expediente;
    }

    public function setMovil($movil) {
        $this->movil = $movil;
    }

    public function setTipoServicio($tipoServicio) {
        $this->tipoServicio = $tipoServicio;
    }

    public function setVehiculo($vehiculo) {
        $this->vehiculo = $vehiculo;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setDecreto($decreto) {
        $this->decreto = $decreto;
    }

    public function setInspeccionesMecanicas($inspeccionesMecanicas) {
        $this->inspeccionesMecanicas = $inspeccionesMecanicas;
        foreach ($inspeccionesMecanicas as $inspeccion) {
            $inspeccion->setContrato($this);
        }
    }

}
