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
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=500, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     */
    private $email;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=true, options={"default"="1"})
     */
    private $isactive = '1';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entidades\Rol", inversedBy="usuario")
     * @ORM\JoinTable(name="usuario_has_rol",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Usuario_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Rol_idRol", referencedColumnName="idRol")
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username.
     *
     * @param string $username
     *
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isactive.
     *
     * @param bool|null $isactive
     *
     * @return Usuario
     */
    public function setIsactive($isactive = null)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * Get isactive.
     *
     * @return bool|null
     */
    public function getIsactive()
    {
        return $this->isactive;
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
