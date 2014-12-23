<?php

namespace Opensoft\BookshelfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BookController extends Controller
{
    /**
     * @Route("/book/list", name="book_list")
     * @Template()
     */
    public function listAction()
    {
        $bookRepository = $this->getDoctrine()->getRepository('OpensoftBookshelfBundle:Book');
        $books = $bookRepository->findAll();

        return ['books' => $books];
    }

    /**
     * @Route("/book/{id}", name="book_view")
     * @Template()
     */
    public function viewAction($id)
    {
        $bookRepository = $this->getDoctrine()->getRepository('OpensoftBookshelfBundle:Book');
        $book = $bookRepository->find($id);

        return ['book' => $book];
    }

    /**
     * @Route("/book/{id}/edit", name="book_edit")
     * @Template()
     */
    public function editAction()
    {

    }

    /**
     * @Route("/book/{id}/edit", name="book_edit")
     * @Template()
     */
    public function addAction()
    {

    }

    /**
     * @Route("/book/{id}/delete", name="book_delete")
     * @Template()
     */
    public function deleteAction()
    {

    }


}
