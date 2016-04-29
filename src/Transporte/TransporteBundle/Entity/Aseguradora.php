<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Aseguradora
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Aseguradora {

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
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\Poliza", mappedBy="aseguradora", cascade={"all"})
     */
    protected $polizas;

    function __construct() {
        $this->poliza = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPolizas() {
        return $this->polizas;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setPolizas($polizas) {
        $this->polizas = $polizas;
        foreach ($polizas as $poliza) {
            $poliza->setAseguradora($this);
        }
    }

    public function __toString() {
        return $this->descripcion;
    }

}
