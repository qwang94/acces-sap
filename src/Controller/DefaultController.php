<?php

namespace App\Controller;

use App\Repository\InvoiceRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(
        InvoiceRepository $invoiceRepository,
        PaginatorInterface $paginator,
        Request $request): Response
    {
        $data = $invoiceRepository->findAll();
        $invoices = $paginator->paginate(
            $data,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('default/index.html.twig', [
            'invoices' => $invoices,
        ]);
    }
}
