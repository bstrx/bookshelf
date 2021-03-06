<?php

namespace Opensoft\BookshelfBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="reader")
 */
class User extends BaseUser implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Book", inversedBy="users")
     * @ORM\JoinTable(name="users_books")
     * @var ArrayCollection|Book
     */
    protected $books;

    public function __construct()
    {
        parent::__construct();

        $this->books = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|Book
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * @param Book $book
     */
    public function addBook(Book $book)
    {
        $this->books->add($book);
    }
}
