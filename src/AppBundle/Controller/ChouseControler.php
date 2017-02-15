<?php
/**
 * Created by PhpStorm.
 * User: Imesh Chinthaka
 * Date: 2017-01-16
 * Time: AM 12.31
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ChouseControler extends Controller
{
    /**
     * @Route("/home/tutorial")
     */
    public function homePage(){


        return $this->render('ionic/tabs.html.twig');


    }

    /**
     * @Route("/home")
     */

    public function ionic(){


        return $this->render('ionic/roombutton/room.html.twig');


    }

}