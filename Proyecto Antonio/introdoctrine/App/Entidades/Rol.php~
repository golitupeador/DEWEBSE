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
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entidades\Usuario", mappedBy="rolIdrol")
     */
    private $usuarioUsuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarioUsuario = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Rol
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add usuarioUsuario.
     *
     * @param \App\Entidades\Usuario $usuarioUsuario
     *
     * @return Rol
     */
    public function addUsuarioUsuario(\App\Entidades\Usuario $usuarioUsuario)
    {
        $this->usuarioUsuario[] = $usuarioUsuario;

        return $this;
    }

    /**
     * Remove usuarioUsuario.
     *
     * @param \App\Entidades\Usuario $usuarioUsuario
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUsuarioUsuario(\App\Entidades\Usuario $usuarioUsuario)
    {
        return $this->usuarioUsuario->removeElement($usuarioUsuario);
    }

    /**
     * Get usuarioUsuario.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarioUsuario()
    {
        return $this->usuarioUsuario;
    }
}
