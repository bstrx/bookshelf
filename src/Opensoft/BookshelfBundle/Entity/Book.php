<?php

namespace Opensoft\BookshelfBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Opensoft\BookshelfBundle\Entity\Repository\BookRepository")
 * @ORM\Table(name="book")
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string")
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(name="description", type="string")
     * @var string
     */
    private $description;

    /** TODO
     * @ORM\Column(name="rating", type="float")
     * @var integer
    private $rating;
     */

    /**
     * @ORM\Column(name="link", type="string")
     * @var string
     */
    private $link;

    /**
     * @ORM\Column(name="author", type="string")
     * @var string
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="books")
     * @var ArrayCollection|User
     */
    private $users;

    /**
     * @ORM\Column(name="published", type="date", nullable=true)
     * @var \DateTime
     */
    private $published;

    /**
     * @ORM\Column(name="pages", type="integer", nullable=true)
     * @var integer
     */
    private $pages;

    /**
     * @ORM\Column(name="edition", type="string", nullable=true)
     * @var string
     */
    private $edition;

    /**
     * @ORM\Column(name="is_public", type="boolean")
     * @var bool
     */
    private $public = false;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return ArrayCollection|User
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param User $user
     */
    public function addUser($user)
    {
        $this->users->add($user);
    }

    /**
     * @return bool
     */
    public function isPublic()
    {
        return $this->public;
    }

    /**
     * @param bool $public
     */
    public function setPublic($public)
    {
        $this->public = (bool) $public;
    }


    /**
     * @return \DateTime
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param \DateTime $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return integer
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param integer $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    /**
     * @return string
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * @param string $edition
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
    }
}