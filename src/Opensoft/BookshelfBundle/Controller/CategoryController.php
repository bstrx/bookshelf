<?php

namespace Opensoft\BookshelfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CategoryController extends Controller
{
    /**
     * @Route("/category/list", name="category_list")
     * @Template()
     */
    public function listAction()
    {
        $categoryRepository = $this->getDoctrine()->getRepository('OpensoftBookshelfBundle:Category');
        $categories = $categoryRepository->findAll();

        return ['categories' => $categories];
    }

    /**
     * @Route("/category/{id}/edit", name="category_edit")
     * @Template()
     */
    public function addAction()
    {

    }

    /**
     * @Route("/category/{id}/delete", name="category_delete")
     * @Template()
     */
    public function deleteAction()
    {

    }


}
