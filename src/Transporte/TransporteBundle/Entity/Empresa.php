<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

/**
 * Empresa
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Empresa {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cuit;

    /**
     * @ORM\Column(type="string")
     */
    private $razonSocial;

    /**
     * @ORM\Column(type="string")
     */
    private $domicilio;

    /**
     * @ORM\Column(type="string")
     */
    private $telefono;

    /**
     * @ORM\Column(type="string")
     */
    private $celular;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantPermitida;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaAlta;

    /**
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\Contrato", mappedBy="empresa", cascade={"all"})
     */
    protected $contratos;

    /**
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\Decreto", mappedBy="empresa", cascade={"all"})
     */
    protected $decretos;

    function __construct() {
        $this->contratos = new ArrayCollection();
        $this->decretos = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getCuit() {
        return $this->cuit;
    }

    public function getRazonSocial() {
        return $this->razonSocial;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getCantPermitida() {
        return $this->cantPermitida;
    }

    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContratos() {
        return $this->contratos;
    }

    public function getDecretos() {
        return $this->decretos;
    }

    public function getCantActual() {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq("fechaBaja", null));
        $cantActual = $this->contratos->matching($criteria);
        return $cantActual->count();
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setCuit($cuit) {
        $this->cuit = $cuit;
    }

    public function setRazonSocial($razonSocial) {
        $this->razonSocial = $razonSocial;
    }

    public function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setCantPermitida($cantPermitida) {
        $this->cantPermitida = $cantPermitida;
    }

    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setContratos($contratos) {
        $this->contratos = $contratos;
        foreach ($contratos as $contrato) {
            $contrato->setEmpresa($this);
        }
    }

    public function setDecretos($decretos) {
        $this->decretos = $decretos;
        foreach ($decretos as $decreto) {
            $decreto->setEmpresa($this);
        }
    }

    public function __toString() {
        return $this->razonSocial;
    }

}
