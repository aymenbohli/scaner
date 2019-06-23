<?php

namespace App\Controller;

use App\Entity\CategoryCours;
use App\Form\CategoryCoursType;
use App\Repository\CategoryCoursRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categoy-cours")
 */
class CategoryCoursController extends AbstractController
{
    /**
     * @Route("/", name="category_cours_index", methods={"GET"})
     */
    public function index(Request $request,CategoryCoursRepository $categoryCoursRepository,PaginatorInterface $paginator): Response
    {
        $query=$categoryCoursRepository->findAll();

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );

        return $this->render('category_cours/index.html.twig', [
            'category_cours' => $pagination,
        ]);
    }

    /**
     * @Route("/new", name="category_cours_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categoryCour = new CategoryCours();
        $form = $this->createForm(CategoryCoursType::class, $categoryCour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categoryCour);
            $entityManager->flush();

            return $this->redirectToRoute('category_cours_index');
        }

        return $this->render('category_cours/new.html.twig', [
            'category_cour' => $categoryCour,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="category_cours_show", methods={"GET"})
     */
    public function show(CategoryCours $categoryCour): Response
    {
        return $this->render('category_cours/show.html.twig', [
            'category_cour' => $categoryCour,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="category_cours_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CategoryCours $categoryCour): Response
    {
        $form = $this->createForm(CategoryCoursType::class, $categoryCour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('category_cours_index', [
                'id' => $categoryCour->getId(),
            ]);
        }

        return $this->render('category_cours/edit.html.twig', [
            'category_cour' => $categoryCour,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="category_cours_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CategoryCours $categoryCour): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categoryCour->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categoryCour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('category_cours_index');
    }
}
