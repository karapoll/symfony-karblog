<?php

namespace Troiswa\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Troiswa\BlogBundle\Entity\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="author", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(min = 5, max = 255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=4096)
     * @Assert\NotBlank()
     * @Assert\Length(min = 100, max = 4096)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \boolean
     *
     * @ORM\Column(name="cover", type="boolean")
     * @Assert\NotBlank()
     * @Assert\Range(min = 0, max = 1)
     */
    private $cover;

    /**
     *
     * @ORM\OneToMany(targetEntity="Troiswa\BlogBundle\Entity\Comment", mappedBy="article", cascade={"remove"})
     * @Assert\NotBlank()
     */
    private $comments;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Troiswa\BlogBundle\Entity\Category")
     */
    private $category;








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
     * Set titre
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Article
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set cover
     *
     * @param boolean $cover
     * @return Article
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return boolean 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comments
     *
     * @param \Troiswa\BlogBundle\Entity\Comment $comments
     * @return Article
     */
    public function addComment(\Troiswa\BlogBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
        $comments -> setArticle($this);
        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Troiswa\BlogBundle\Entity\Comment $comments
     */
    public function removeComment(\Troiswa\BlogBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Add category
     *
     * @param \Troiswa\BlogBundle\Entity\Category $category
     * @return Article
     */
    public function addCategory(\Troiswa\BlogBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Troiswa\BlogBundle\Entity\Category $category
     */
    public function removeCategory(\Troiswa\BlogBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
