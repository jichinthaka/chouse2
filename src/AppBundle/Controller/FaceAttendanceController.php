<?php
/**
 * Created by PhpStorm.
 * User: Imesh Chinthaka
 * Date: 2017-03-19
 * Time: AM 10.46
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FaceAttendanceController extends Controller
{
    /**
     * @Route("/upload")
     */
    public function getFile(Request $request){

        $fs = new Filesystem();
        $uf = new UploadedFile();

        $file = $request->files->get('1.jpg');
//        $file = $request->files->all()['files']['0'];
//        $file->
        $uf->move($this->get('kernel')->getRootDir() . '/../web' . $this->getRequest()->getBasePath(),$file);



//        return $this->render('ionic/tabs.html.twig',array(
//            'name' => 'Fabien'));
//        return '<img src=$file>';?


    }


}