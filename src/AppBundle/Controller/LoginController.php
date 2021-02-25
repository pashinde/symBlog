<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class LoginController extends Controller
{
    /**
     * @Route("/loginasdf", name="login", methods={"GET", "POST"})
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('AppBundle:Login:login.html.twig', [
            'errors' => $authenticationUtils->getLastAuthenticationError(),
            'username' => $authenticationUtils->getLastUsername(),
        ]);
    }

    /**
     * @Route("/logoutasdf", name="logout")
     */
    public function logout()
    {

    }

}
