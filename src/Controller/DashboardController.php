<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\DBAL\Driver\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/dashboard/{id}")
 * IsGranted("ROLE_USER")
 */
class DashboardController extends AbstractController
{
    /**
     * @Route("", name="dashboard.index")
     */
    public function index( $id, UserRepository $userRepository): Response
    {
       $user=$userRepository->find($id);
        return $this->render('dashboard/index.html.twig');
    }
}
