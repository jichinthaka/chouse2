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

class FaceAttendanceController extends Controller
{
    /**
     * @Route("/upload")
     */
    public function homePage(Request $request){

        $file = $request->files->get('1.jpg');


    }


}