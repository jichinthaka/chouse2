<?php
/**
 * Created by PhpStorm.
 * User: Imesh Chinthaka
 * Date: 2017-03-29
 * Time: PM 8.50
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login",name="login")
     */
    public function loginAction(Request $request){
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        

        return $this->render('main/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));

    }

}