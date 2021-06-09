<?php

namespace App\Entity;

use App\Repository\AppointementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AppointementRepository::class)
 */
class Appointement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $apt_date;

    /**
     * @ORM\Column(type="time")
     */
    private $apt_time;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="text")
     */
    private $observation;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="appointements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAptDate(): ?\DateTimeInterface
    {
        return $this->apt_date;
    }

    public function setAptDate(\DateTimeInterface $apt_date): self
    {
        $this->apt_date = $apt_date;

        return $this;
    }

    public function getAptTime(): ?\DateTimeInterface
    {
        return $this->apt_time;
    }

    public function setAptTime(\DateTimeInterface $apt_time): self
    {
        $this->apt_time = $apt_time;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getPatient(): ?user
    {
        return $this->patient;
    }

    public function setPatient(?user $patient): self
    {
        $this->patient = $patient;

        return $this;
    }
}
