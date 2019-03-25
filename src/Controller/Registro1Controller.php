<?php

namespace App\Controller;

use App\Entity\Registro1;
use App\Form\Registro1Type;
use App\Repository\Registro1Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/registro1")
 */
class Registro1Controller extends AbstractController
{
    /**
     * @Route("/", name="registro1_index", methods={"GET"})
     */
    public function index(Registro1Repository $registro1Repository): Response
    {
        return $this->render('registro1/index.html.twig', [
            'registro1s' => $registro1Repository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="registro1_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $registro1 = new Registro1();
        $form = $this->createForm(Registro1Type::class, $registro1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($registro1);
            $entityManager->flush();

            return $this->redirectToRoute('registro1_index');
        }

        return $this->render('registro1/new.html.twig', [
            'registro1' => $registro1,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="registro1_show", methods={"GET"})
     */
    public function show(Registro1 $registro1): Response
    {
        return $this->render('registro1/show.html.twig', [
            'registro1' => $registro1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="registro1_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Registro1 $registro1): Response
    {
        $form = $this->createForm(Registro1Type::class, $registro1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('registro1_index', [
                'id' => $registro1->getId(),
            ]);
        }

        return $this->render('registro1/edit.html.twig', [
            'registro1' => $registro1,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="registro1_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Registro1 $registro1): Response
    {
        if ($this->isCsrfTokenValid('delete'.$registro1->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($registro1);
            $entityManager->flush();
        }

        return $this->redirectToRoute('registro1_index');
    }
}
