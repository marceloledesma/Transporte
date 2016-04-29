<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Decreto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Decreto {

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
    private $nroDecreto;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaAlta;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaBaja;

    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\Empresa", inversedBy="decretos")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id", nullable=false)
     */
    protected $empresa;

    /**
     * @ORM\OneToOne(targetEntity="Transporte\TransporteBundle\Entity\Contrato", mappedBy="decreto")
     */
    protected $contrato;

    function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getNroDecreto() {
        return $this->nroDecreto;
    }

    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    public function getFechaBaja() {
        return $this->fechaBaja;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getContrato() {
        return $this->contrato;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNroDecreto($nroDecreto) {
        $this->nroDecreto = $nroDecreto;
    }

    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }

    public function setFechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setContrato($contrato) {
        $this->contrato = $contrato;
    }

}
