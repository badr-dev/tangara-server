<?php

namespace Tangara\TangaraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tangara\UserBundle\Entity\User;
use Tangara\TangaraBundle\Entity\Project;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tangara\TangaraBundle\Entity\ProjectRepository")
 */
class Project extends \Doctrine\ORM\EntityRepository {

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
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Tangara\UserBundle\Entity\User")
     * @ORM\JoinTable(name="ProjectManager",
     *      joinColumns={@ORM\JoinColumn(name="project_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     * )
     */
    private $projectManager;

    /**
     * @ORM\ManyToOne(targetEntity="Tangara\TangaraBundle\Entity\Project")
     * @ORM\JoinTable(name="project_files",
     *      joinColumns={@ORM\JoinColumn(name="project_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="file_id", referencedColumnName="id")}
     * )
     */
    protected $relativeProject;

    /**
     * @var integer
     *
     * @ORM\Column(name="ReferenceWidth", type="integer", nullable=true)
     */
    private $referenceWidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="ReferenceHeight", type="integer", nullable=true)
     */
    private $referenceHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="ReferenceFont", type="string", length=255, nullable=true)
     */
    private $referenceFont;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime")
     */
    private $dateCreation;

    public function __construct() {
        $this->dateCreation = new \DateTime('NOW');
        $this->referenceHeight = 1024;
        $this->referenceWidth = 768;
        $this->referenceFont = "Arial";
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Project
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set referenceWidth
     *
     * @param integer $referenceWidth
     * @return Project
     */
    public function setReferenceWidth($referenceWidth) {
        $this->referenceWidth = $referenceWidth;

        return $this;
    }

    /**
     * Get referenceWidth
     *
     * @return integer 
     */
    public function getReferenceWidth() {
        return $this->referenceWidth;
    }

    /**
     * Set referenceHeight
     *
     * @param integer $referenceHeight
     * @return Project
     */
    public function setReferenceHeight($referenceHeight) {
        $this->referenceHeight = $referenceHeight;

        return $this;
    }

    /**
     * Get referenceHeight
     *
     * @return integer 
     */
    public function getReferenceHeight() {
        return $this->referenceHeight;
    }

    /**
     * Set referenceFont
     *
     * @param string $referenceFont
     * @return Project
     */
    public function setReferenceFont($referenceFont) {
        $this->referenceFont = $referenceFont;

        return $this;
    }

    /**
     * Get referenceFont
     *
     * @return string 
     */
    public function getReferenceFont() {
        return $this->referenceFont;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Project
     */
    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Set projectManager
     *
     * @param \Tangara\UserBundle\Entity\User $projectManager
     * @return Project
     */
    public function setProjectManager(\Tangara\UserBundle\Entity\User $projectManager = null) {
        $this->projectManager = $projectManager;

        return $this;
    }

    /**
     * Get projectManager
     *
     * @return \Tangara\UserBundle\Entity\User 
     */
    public function getProjectManager() {
        return $this->projectManager;
    }

    /**
     * Set relativeProject
     *
     * @param \Tangara\ProjectBundle\Entity\Project $relativeProject
     * @return Project
     */
    public function setRelativeProject(\Tangara\ProjectBundle\Entity\Project $relativeProject = null) {
        $this->relativeProject = $relativeProject;

        return $this;
    }

    /**
     * Get relativeProject
     *
     * @return \Tangara\ProjectBundle\Entity\Project 
     */
    public function getRelativeProject() {
        return $this->relativeProject;
    }

}