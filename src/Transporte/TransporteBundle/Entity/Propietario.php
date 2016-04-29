<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propietario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Propietario {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Transporte\TransporteBundle\Entity\Vehiculo", inversedBy="propietarios")
     * @ORM\JoinTable(name="propietarios_vehiculos",
     *      joinColumns={@ORM\JoinColumn(name="propietario_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="vehiculo_id", referencedColumnName="id")}
     *      )
     */
    protected $vehiculos;

    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\Persona", inversedBy="propietarios")
     * @ORM\JoinColumn(name="persona_id", referencedColumnName="id", nullable=false)
     */
    protected $persona;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaAlta;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaBaja;

    function __construct() {
        $this->vehiculos = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getVehiculos() {
        return $this->vehiculos;
    }

    public function getPersona() {
        return $this->persona;
    }

    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    public function getFechaBaja() {
        return $this->fechaBaja;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setVehiculos($vehiculos) {
        $this->vehiculos = $vehiculos;
        foreach ($vehiculos as $vehiculo) {
            $vehiculo->setPropietario($this);
        }
    }

    public function setVehiculo($vehiculo) {
        $this->vehiculo = $vehiculo;
    }

    public function setPersona($persona) {
        $this->persona = $persona;
    }

    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }

    public function setFechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;
    }

}
