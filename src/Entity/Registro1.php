<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Registro1Repository")
 */
class Registro1
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaAsesoria;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $radicadoCaso;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $area;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $nombreCompleto;

    /**
     * @ORM\Column(type="bigint")
     */
    private $documentoId;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaExpedicion;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ocupacion;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $departamento;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $municipio;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $ciudad;

    /**
     * @ORM\Column(type="string", length=130)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $barrio;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $telFijo;

    /**
     * @ORM\Column(type="bigint")
     */
    private $telCelular;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $estrato;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $escolaridad;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $nombreContacto;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $parentescoContacto;

    /**
     * @ORM\Column(type="string", length=130)
     */
    private $direccionContacto;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $barrioContacto;


    /**
     * @ORM\Column(type="bigint")
     */
    private $telcelContacto;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $emailContacto;

    /**
     * @ORM\Column(type="boolean")
     */
    private $preguntaConsultorio;

    /**
     * @ORM\Column(type="boolean")
     */
    private $apoderado;

    /**
     * @ORM\Column(type="text")
     */
    private $hechoCaso;

    /**
     * @ORM\Column(type="boolean")
     */
    private $menoresCaso;

    /**
     * @ORM\Column(type="boolean")
     */
    private $porSerRegistro;

    /**
     * @ORM\Column(type="boolean")
     */
    private $porSerPosibleSolucion;

    /**
     * @ORM\Column(type="boolean")
     */
    private $noSeIntentara;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaRegreso;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $lugar;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $telfijoContacto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaAsesoria(): ?\DateTimeInterface
    {
        return $this->fechaAsesoria;
    }

    public function setFechaAsesoria(\DateTimeInterface $fechaAsesoria): self
    {
        $this->fechaAsesoria = $fechaAsesoria;

        return $this;
    }

    public function getRadicadoCaso(): ?string
    {
        return $this->radicadoCaso;
    }

    public function setRadicadoCaso(string $radicadoCaso): self
    {
        $this->radicadoCaso = $radicadoCaso;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getNombreCompleto(): ?string
    {
        return $this->nombreCompleto;
    }

    public function setNombreCompleto(string $nombreCompleto): self
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    public function getDocumentoId(): ?int
    {
        return $this->documentoId;
    }

    public function setDocumentoId(int $documentoId): self
    {
        $this->documentoId = $documentoId;

        return $this;
    }

    public function getFechaExpedicion(): ?\DateTimeInterface
    {
        return $this->fechaExpedicion;
    }

    public function setFechaExpedicion(\DateTimeInterface $fechaExpedicion): self
    {
        $this->fechaExpedicion = $fechaExpedicion;

        return $this;
    }

    public function getOcupacion(): ?string
    {
        return $this->ocupacion;
    }

    public function setOcupacion(string $ocupacion): self
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    public function getDepartamento(): ?string
    {
        return $this->departamento;
    }

    public function setDepartamento(string $departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }

    public function getMunicipio(): ?string
    {
        return $this->municipio;
    }

    public function setMunicipio(string $municipio): self
    {
        $this->municipio = $municipio;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getBarrio(): ?string
    {
        return $this->barrio;
    }

    public function setBarrio(string $barrio): self
    {
        $this->barrio = $barrio;

        return $this;
    }

    public function getTelFijo(): ?int
    {
        return $this->telFijo;
    }

    public function setTelFijo(?int $telFijo): self
    {
        $this->telFijo = $telFijo;

        return $this;
    }

    public function getTelCelular(): ?int
    {
        return $this->telCelular;
    }

    public function setTelCelular(int $telCelular): self
    {
        $this->telCelular = $telCelular;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEstrato(): ?int
    {
        return $this->estrato;
    }

    public function setEstrato(int $estrato): self
    {
        $this->estrato = $estrato;

        return $this;
    }

    public function getEscolaridad(): ?string
    {
        return $this->escolaridad;
    }

    public function setEscolaridad(string $escolaridad): self
    {
        $this->escolaridad = $escolaridad;

        return $this;
    }

    public function getNombreContacto(): ?string
    {
        return $this->nombreContacto;
    }

    public function setNombreContacto(string $nombreContacto): self
    {
        $this->nombreContacto = $nombreContacto;

        return $this;
    }

    public function getParentescoContacto(): ?string
    {
        return $this->parentescoContacto;
    }

    public function setParentescoContacto(string $parentescoContacto): self
    {
        $this->parentescoContacto = $parentescoContacto;

        return $this;
    }

    public function getDireccionContacto(): ?string
    {
        return $this->direccionContacto;
    }

    public function setDireccionContacto(string $direccionContacto): self
    {
        $this->direccionContacto = $direccionContacto;

        return $this;
    }

    public function getBarrioContacto(): ?string
    {
        return $this->barrioContacto;
    }

    public function setBarrioContacto(string $barrioContacto): self
    {
        $this->barrioContacto = $barrioContacto;

        return $this;
    }


    public function getTelcelContacto(): ?int
    {
        return $this->telcelContacto;
    }

    public function setTelcelContacto(int $telcelContacto): self
    {
        $this->telcelContacto = $telcelContacto;

        return $this;
    }

    public function getEmailContacto(): ?string
    {
        return $this->emailContacto;
    }

    public function setEmailContacto(string $emailContacto): self
    {
        $this->emailContacto = $emailContacto;

        return $this;
    }

    public function getPreguntaConsultorio(): ?bool
    {
        return $this->preguntaConsultorio;
    }

    public function setPreguntaConsultorio(bool $preguntaConsultorio): self
    {
        $this->preguntaConsultorio = $preguntaConsultorio;

        return $this;
    }

    public function getApoderado(): ?bool
    {
        return $this->apoderado;
    }

    public function setApoderado(bool $apoderado): self
    {
        $this->apoderado = $apoderado;

        return $this;
    }

    public function getHechoCaso(): ?string
    {
        return $this->hechoCaso;
    }

    public function setHechoCaso(string $hechoCaso): self
    {
        $this->hechoCaso = $hechoCaso;

        return $this;
    }

    public function getMenoresCaso(): ?bool
    {
        return $this->menoresCaso;
    }

    public function setMenoresCaso(bool $menoresCaso): self
    {
        $this->menoresCaso = $menoresCaso;

        return $this;
    }

    public function getPorSerRegistro(): ?bool
    {
        return $this->porSerRegistro;
    }

    public function setPorSerRegistro(bool $porSerRegistro): self
    {
        $this->porSerRegistro = $porSerRegistro;

        return $this;
    }

    public function getPorSerPosibleSolucion(): ?bool
    {
        return $this->porSerPosibleSolucion;
    }

    public function setPorSerPosibleSolucion(bool $porSerPosibleSolucion): self
    {
        $this->porSerPosibleSolucion = $porSerPosibleSolucion;

        return $this;
    }

    public function getNoSeIntentara(): ?bool
    {
        return $this->noSeIntentara;
    }

    public function setNoSeIntentara(bool $noSeIntentara): self
    {
        $this->noSeIntentara = $noSeIntentara;

        return $this;
    }

    public function getFechaRegreso(): ?\DateTimeInterface
    {
        return $this->fechaRegreso;
    }

    public function setFechaRegreso(\DateTimeInterface $fechaRegreso): self
    {
        $this->fechaRegreso = $fechaRegreso;

        return $this;
    }

    public function getLugar(): ?string
    {
        return $this->lugar;
    }

    public function setLugar(string $lugar): self
    {
        $this->lugar = $lugar;

        return $this;
    }

    public function getTelfijoContacto(): ?int
    {
        return $this->telfijoContacto;
    }

    public function setTelfijoContacto(?int $telfijoContacto): self
    {
        $this->telfijoContacto = $telfijoContacto;

        return $this;
    }
}
