<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poliza
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Poliza
{
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
     * @ORM\Column(type="date")
     */
    private $vencimiento;
    
    /**
     * @ORM\Column(type="string")
     */
    private $nroPoliza;
    
    /**
     * @ORM\Column(type="string")
     */
    private $detalleCobertura;
    
    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\Aseguradora", inversedBy="polizas")
     * @ORM\JoinColumn(name="aseguradora_id", referencedColumnName="id", nullable=false)
     */
    protected $aseguradora;
    
    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\Vehiculo", inversedBy="polizas")
     * @ORM\JoinColumn(name="vehiculo_id", referencedColumnName="id", nullable=false)
     */
    protected $vehiculo;
    
    function __construct() {
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    public function getVencimiento() {
        return $this->vencimiento;
    }
    
    public function getNroPoliza() {
        return $this->nroPoliza;
    }

    public function getDetalleCobertura() {
        return $this->detalleCobertura;
    }

    public function getAseguradora() {
        return $this->aseguradora;
    }

    public function getVehiculo() {
        return $this->vehiculo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }

    public function setVencimiento($vencimiento) {
        $this->vencimiento = $vencimiento;
    }
    
    public function setNroPoliza($nroPoliza) {
        $this->nroPoliza = $nroPoliza;
    }

    public function setDetalleCobertura($detalleCobertura) {
        $this->detalleCobertura = $detalleCobertura;
    }

    public function setAseguradora($aseguradora) {
        $this->aseguradora = $aseguradora;
    }

    public function setVehiculo($vehiculo) {
        $this->vehiculo = $vehiculo;
    }


}
