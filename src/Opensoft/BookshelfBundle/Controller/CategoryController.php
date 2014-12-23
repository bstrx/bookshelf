<?php

namespace Opensoft\BookshelfBundle\Controller;

use Opensoft\BookshelfBundle\Entity\Category;
use Opensoft\BookshelfBundle\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/category/add", name="category_add")
     * @Template()
     */
    public function addAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(new CategoryType(), $category);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect($this->generateUrl('category_list'));
        }

        return ['form' => $form->createView()];
    }

    /**
     * @Route("/category/{id}/edit", name="category_edit")
     * @Template()
     */
    public function editAction($id)
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
