<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 */
class Article
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
     * @ORM\Column(name="Title", type="string", length=1000, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="HeaderImage", type="string", length=255, nullable=false)
     */
    private $headerimage;

    /**
     * @var string
     *
     * @ORM\Column(name="Introduction", type="text", length=16777215, nullable=false)
     */
    private $introduction;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastMod", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastmod = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="Language", type="string", length=2, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="KeyWords", type="string", length=1000, nullable=false)
     */
    private $keywords;

    /**
     * @var int
     *
     * @ORM\Column(name="State", type="integer", nullable=false)
     */
    private $state;

    /**
     * @var int
     *
     * @ORM\Column(name="NumVisit", type="integer", nullable=false)
     */
    private $numvisit;

    /**
     * @var int
     *
     * @ORM\Column(name="IdTheme", type="integer", nullable=false)
     */
    private $idtheme;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var int
     *
     * @ORM\Column(name="IdHost", type="integer", nullable=false)
     */
    private $idhost;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getHeaderimage(): ?string
    {
        return $this->headerimage;
    }

    public function setHeaderimage(string $headerimage): self
    {
        $this->headerimage = $headerimage;

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastmod(): ?string
    {
        return $this->lastmod->format('d/m/Y');;
    }
    /**
     * @param string $lastmod
     * @throws Exception
     */

    public function setLastmod(string $lastmod): void
    {
        $this->lastmod = new DateTime($lastmod);
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(int $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getNumvisit(): ?int
    {
        return $this->numvisit;
    }

    public function setNumvisit(int $numvisit): self
    {
        $this->numvisit = $numvisit;

        return $this;
    }

    public function getIdtheme(): ?int
    {
        return $this->idtheme;
    }

    public function setIdtheme(int $idtheme): self
    {
        $this->idtheme = $idtheme;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdhost(): ?int
    {
        return $this->idhost;
    }

    public function setIdhost(int $idhost): self
    {
        $this->idhost = $idhost;

        return $this;
    }


}
