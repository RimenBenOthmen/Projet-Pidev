<?php

namespace App\Controller;

use App\Entity\Citoyen;
use App\Form\CitoyenType;
use App\Repository\CitoyenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/citoyen")
 */
class CitoyenController extends AbstractController
{
    /**
     * @Route("/", name="app_citoyen_index", methods={"GET"})
     */
    public function index(CitoyenRepository $citoyenRepository): Response
    {
        return $this->render('citoyen/index.html.twig', [
            'citoyens' => $citoyenRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_citoyen_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CitoyenRepository $citoyenRepository): Response
    {
        $citoyen = new Citoyen();
        $form = $this->createForm(CitoyenType::class, $citoyen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $citoyenRepository->add($citoyen);
            return $this->redirectToRoute('app_citoyen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('citoyen/new.html.twig', [
            'citoyen' => $citoyen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcitoy}", name="app_citoyen_show", methods={"GET"})
     */
    public function show(Citoyen $citoyen): Response
    {
        return $this->render('citoyen/show.html.twig', [
            'citoyen' => $citoyen,
        ]);
    }

    /**
     * @Route("/{idcitoy}/edit", name="app_citoyen_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Citoyen $citoyen, CitoyenRepository $citoyenRepository): Response
    {
        $form = $this->createForm(CitoyenType::class, $citoyen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $citoyenRepository->add($citoyen);
            return $this->redirectToRoute('app_citoyen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('citoyen/edit.html.twig', [
            'citoyen' => $citoyen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcitoy}", name="app_citoyen_delete", methods={"POST"})
     */
    public function delete(Request $request, Citoyen $citoyen, CitoyenRepository $citoyenRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$citoyen->getIdcitoy(), $request->request->get('_token'))) {
            $citoyenRepository->remove($citoyen);
        }

        return $this->redirectToRoute('app_citoyen_index', [], Response::HTTP_SEE_OTHER);
    }
}
