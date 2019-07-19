<?php

namespace App\Controller;

use App\Entity\Classes;
use App\Form\ClassesType;
use App\Repository\ClassesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/classes")
 */
class ClassesController extends AbstractController
{
    /**
     * @Route("/", name="classes_index", methods={"GET"})
     */
    public function index(Request $request,ClassesRepository $classesRepository,PaginatorInterface $paginator): Response
    {
        $pagination = $paginator->paginate(
            $classesRepository->findAll(), /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            4 /*limit per page*/
        );

        return $this->render('classes/index.html.twig', [
            'classes' => $pagination,
        ]);
    }

    /**
     * @Route("/new", name="classes_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $class = new Classes();
        $form = $this->createForm(ClassesType::class, $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($class);
            $entityManager->flush();

            $this->addFlash('success', 'question Ajouter!');

            return $this->redirectToRoute('classes_index');
        }

        return $this->render('classes/new.html.twig', [
            'class' => $class,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="classes_show", methods={"GET"})
     */
    public function show(Classes $class): Response
    {
        return $this->render('classes/show.html.twig', [
            'class' => $class,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="classes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Classes $class): Response
    {
        $form = $this->createForm(ClassesType::class, $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'question modifier!');

            return $this->redirectToRoute('classes_index', [
                'id' => $class->getId(),
            ]);
        }

        return $this->render('classes/edit.html.twig', [
            'class' => $class,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="classes_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Classes $class): Response
    {
        if ($this->isCsrfTokenValid('delete'.$class->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($class);
            $entityManager->flush();

            $this->addFlash('success', 'question supprimer!');

        }

        return $this->redirectToRoute('classes_index');
    }
}
