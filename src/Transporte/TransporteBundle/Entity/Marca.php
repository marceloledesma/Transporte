<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marca
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Marca {

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
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\Vehiculo", mappedBy="marca", cascade={"all"})
     */
    protected $vehiculos;

    function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getVehiculos() {
        return $this->vehiculos;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setVehiculos($vehiculos) {
        $this->vehiculos = $vehiculos;
    }

    public function __toString() {
        return $this->descripcion;
    }

}
