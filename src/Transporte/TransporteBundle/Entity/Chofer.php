<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Chofer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Chofer {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Transporte\TransporteBundle\Entity\Vehiculo", inversedBy="choferes")
     * @ORM\JoinTable(name="choferes_vehiculos",
     *      joinColumns={@ORM\JoinColumn(name="chofer_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="vehiculo_id", referencedColumnName="id")}
     *      )
     */
   protected $vehiculos;
    
    /**
     * @ORM\ManyToOne(targetEntity="Transporte\TransporteBundle\Entity\Persona", inversedBy="choferes")
     * @ORM\JoinColumn(name="persona_id", referencedColumnName="id", nullable=false)
     */
    protected $persona;
        
    /**
     * @ORM\Column(type="string")
     */
    private $carnet;
    
    /**
     * @ORM\Column(type="date")
     */
    private $vtoCarnet;
    
    /**
     * @ORM\Column(type="date")
     */
    private $vtoLibretaSanitaria;
    
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

    public function getCarnet() {
        return $this->carnet;
    }

    public function getVtoCarnet() {
        return $this->vtoCarnet;
    }

    public function getVtoLibretaSanitaria() {
        return $this->vtoLibretaSanitaria;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setVehiculos($vehiculos) {
        $this->vehiculos = $vehiculos;
        foreach ($vehiculos as $vehiculo) {
            $vehiculo->setChofer($this);
        }
    }

    public function setVehiculo($vehiculo) {
        $this->vehiculo = $vehiculo;
    }

    public function setPersona($persona) {
        $this->persona = $persona;
    }

    public function setCarnet($carnet) {
        $this->carnet = $carnet;
    }

    public function setVtoCarnet($vtoCarnet) {
        $this->vtoCarnet = $vtoCarnet;
    }

    public function setVtoLibretaSanitaria($vtoLibretaSanitaria) {
        $this->vtoLibretaSanitaria = $vtoLibretaSanitaria;
    }

}
