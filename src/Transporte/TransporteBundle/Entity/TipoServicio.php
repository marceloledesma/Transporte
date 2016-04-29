<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipo de Servicio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TipoServicio {

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
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\Contrato", mappedBy="tipoServicio", cascade={"all"})
     */
    protected $contratos;

    function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getContratos() {
        return $this->contratos;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setContratos($contratos) {
        $this->contratos = $contratos;
    }

    public function __toString() {
        return $this->descripcion;
    }

}
