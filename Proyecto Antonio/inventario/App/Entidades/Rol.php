<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrol;

    /**
     * @var string
     *
     * @ORM\Column(name="Rol", type="string", length=45, nullable=false)
     */
    private $rol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entidades\Usuario", mappedBy="rolIdrol")
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idrol.
     *
     * @return int
     */
    public function getIdrol()
    {
        return $this->idrol;
    }

    /**
     * Set rol.
     *
     * @param string $rol
     *
     * @return Rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol.
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Add usuario.
     *
     * @param \App\Entidades\Usuario $usuario
     *
     * @return Rol
     */
    public function addUsuario(\App\Entidades\Usuario $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario.
     *
     * @param \App\Entidades\Usuario $usuario
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUsuario(\App\Entidades\Usuario $usuario)
    {
        return $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
