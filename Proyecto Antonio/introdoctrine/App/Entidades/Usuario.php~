<?php

namespace App\Entidades;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contrasena", type="string", length=45, nullable=true)
     */
    private $contrasena;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entidades\Rol", inversedBy="usuarioUsuario")
     * @ORM\JoinTable(name="usuario_has_rol",
     *   joinColumns={
     *     @ORM\JoinColumn(name="usuario_usuario", referencedColumnName="usuario")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="rol_idRol", referencedColumnName="idRol")
     *   }
     * )
     */
    private $rolIdrol;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rolIdrol = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get usuario.
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set contrasena.
     *
     * @param string|null $contrasena
     *
     * @return Usuario
     */
    public function setContrasena($contrasena = null)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena.
     *
     * @return string|null
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Add rolIdrol.
     *
     * @param \App\Entidades\Rol $rolIdrol
     *
     * @return Usuario
     */
    public function addRolIdrol(\App\Entidades\Rol $rolIdrol)
    {
        $this->rolIdrol[] = $rolIdrol;

        return $this;
    }

    /**
     * Remove rolIdrol.
     *
     * @param \App\Entidades\Rol $rolIdrol
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRolIdrol(\App\Entidades\Rol $rolIdrol)
    {
        return $this->rolIdrol->removeElement($rolIdrol);
    }

    /**
     * Get rolIdrol.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRolIdrol()
    {
        return $this->rolIdrol;
    }
}
