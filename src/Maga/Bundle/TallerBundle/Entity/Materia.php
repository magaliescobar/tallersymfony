<?php

namespace Maga\Bundle\TallerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Maga\Bundle\TallerBundle\Entity\MateriaRepository")
 */
class Materia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="Curso", inversedBy="materias")
     * @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     */
    protected $curso;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Materia
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set curso
     *
     * @param \Maga\Bundle\TallerBundle\Entity\Curso $curso
     * @return Materia
     */
    public function setCurso(\Maga\Bundle\TallerBundle\Entity\Curso $curso = null)
    {
        $this->curso = $curso;
    
        return $this;
    }

    /**
     * Get curso
     *
     * @return \Maga\Bundle\TallerBundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }
}