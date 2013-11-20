<?php

namespace WebApp\CongresoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Actividad
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
     * @ORM\Column(name="ponentes", type="string", length=255)
     */
    private $ponentes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_ini", type="time")
     */
    private $horaIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_fin", type="time")
     */
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="informacion", type="string", length=255)
     */
    private $informacion;

    /**@ORM\ManyToOne(targetEntity="Congreso")
     */
    private $congreso;


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
     * Set ponentes
     *
     * @param string $ponentes
     * @return Actividad
     */
    public function setPonentes($ponentes)
    {
        $this->ponentes = $ponentes;
    
        return $this;
    }

    /**
     * Get ponentes
     *
     * @return string 
     */
    public function getPonentes()
    {
        return $this->ponentes;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Actividad
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set horaIni
     *
     * @param \DateTime $horaIni
     * @return Actividad
     */
    public function setHoraIni($horaIni)
    {
        $this->horaIni = $horaIni;
    
        return $this;
    }

    /**
     * Get horaIni
     *
     * @return \DateTime 
     */
    public function getHoraIni()
    {
        return $this->horaIni;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     * @return Actividad
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;
    
        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime 
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set informacion
     *
     * @param string $informacion
     * @return Actividad
     */
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;
    
        return $this;
    }

    /**
     * Get informacion
     *
     * @return string 
     */
    public function getInformacion()
    {
        return $this->informacion;
    }

    /**
     * Set congreso
     *
     * @param string $congreso
     * @return Actividad
     */
    public function setCongreso(\WebApp\CongresoBundle\Entity\Congreso $congreso)
    {
        $this->congreso = $congreso;
    
        return $this;
    }

    /**
     * Get congreso
     *
     * @return string 
     */
    public function getCongreso()
    {
        return $this->congreso;
    }
}