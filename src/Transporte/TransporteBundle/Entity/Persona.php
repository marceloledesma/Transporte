<?php

namespace Transporte\TransporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Persona
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Persona {

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
    private $dni;

    /**
     * @ORM\Column(type="string")
     */
    private $apenom;

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
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\Propietario", mappedBy="persona", cascade={"all"})
     */
    protected $propietarios;

    /**
     * @ORM\OneToMany(targetEntity="Transporte\TransporteBundle\Entity\Chofer", mappedBy="persona", cascade={"all"})
     */
    protected $choferes;

    function __construct() {
        $this->propietarios = new ArrayCollection();
        $this->choferes = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getApenom() {
        return $this->apenom;
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

    public function getEmail() {
        return $this->email;
    }

    public function getPropietarios() {
        return $this->propietarios;
    }

    public function getChoferes() {
        return $this->choferes;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setApenom($apenom) {
        $this->apenom = $apenom;
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

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPropietarios($propietarios) {
        $this->propietarios = $propietarios;
        foreach ($propietarios as $propietario) {
            $propietario->setPersona($this);
        }
    }

    public function setChoferes($choferes) {
        $this->choferes = $choferes;
        foreach ($choferes as $chofer) {
            $chofer->setPersona($this);
        }
    }

    public function __toString() {
        return $this->dni;
    }

}
