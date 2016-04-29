<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inspeccion Mecanica
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class InspeccionMecanica {

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
    private $nroOrdenIngreso;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="string")
     */
    private $observacion;

    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\Contrato", inversedBy="inspeccionesMecanicas")
     * @ORM\JoinColumn(name="contrato_id", referencedColumnName="id", nullable=false)
     */
    protected $contrato;

    function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getNroOrdenIngreso() {
        return $this->nroOrdenIngreso;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getObservacion() {
        return $this->observacion;
    }

    public function getContrato() {
        return $this->contrato;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNroOrdenIngreso($nroOrdenIngreso) {
        $this->nroOrdenIngreso = $nroOrdenIngreso;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    public function setContrato($contrato) {
        $this->contrato = $contrato;
    }

}
