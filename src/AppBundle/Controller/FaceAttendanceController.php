<?php
/**
 * Created by PhpStorm.
 * User: Imesh Chinthaka
 * Date: 2017-03-19
 * Time: AM 10.46
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FaceAttendanceController extends Controller
{
    /**
     * @Route("/upload")
     */
    public function getFile(Request $request){

        $file = $request->files->get('1.jpg');

        return $this->render('ionic/tabs.html.twig');


    }


}