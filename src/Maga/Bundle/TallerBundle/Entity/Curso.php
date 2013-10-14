<?php

namespace Maga\Bundle\TallerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Maga\Bundle\TallerBundle\Entity\CursoRepository")
 */
class Curso
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
     * @ORM\ManyToMany(targetEntity="Alumno", inversedBy="cursos")
     * @ORM\JoinTable(name="cursos_Alumno",
     *      joinColumns={@ORM\JoinColumn(name="curso_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="alumno_id", referencedColumnName="id")}
     *      )
     */
    private $alumnos;

    /**
     * @ORM\OneToMany(targetEntity="Curso", mappedBy="curso")
     */
    protected $materias;


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
     * @return Curso
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
     * Constructor
     */
    public function __construct()
    {
        $this->alumnos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->materias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add alumnos
     *
     * @param \Maga\Bundle\TallerBundle\Entity\Alumno $alumnos
     * @return Curso
     */
    public function addAlumno(\Maga\Bundle\TallerBundle\Entity\Alumno $alumnos)
    {
        $this->alumnos[] = $alumnos;
    
        return $this;
    }

    /**
     * Remove alumnos
     *
     * @param \Maga\Bundle\TallerBundle\Entity\Alumno $alumnos
     */
    public function removeAlumno(\Maga\Bundle\TallerBundle\Entity\Alumno $alumnos)
    {
        $this->alumnos->removeElement($alumnos);
    }

    /**
     * Get alumnos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }

    /**
     * Add materias
     *
     * @param \Maga\Bundle\TallerBundle\Entity\Curso $materias
     * @return Curso
     */
    public function addMateria(\Maga\Bundle\TallerBundle\Entity\Curso $materias)
    {
        $this->materias[] = $materias;
    
        return $this;
    }

    /**
     * Remove materias
     *
     * @param \Maga\Bundle\TallerBundle\Entity\Curso $materias
     */
    public function removeMateria(\Maga\Bundle\TallerBundle\Entity\Curso $materias)
    {
        $this->materias->removeElement($materias);
    }

    /**
     * Get materias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaterias()
    {
        return $this->materias;
    }
}