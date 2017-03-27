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

//        $fs = new Filesystem();
//        $uf = new UploadedFile($this->get('kernel')->getRootDir() . '/../web');

        $file = $request->files->get('222');
//        $file = $request->files->all();
//        $file = $request->files->count();
//        $file = $request->files->all()['files']['0'];
//        $file->move($this->get('kernel')->getRootDir() . '/../web','222');
//        $uf->move($this->get('kernel')->getRootDir() . '/../web',$file);

//        if ( $file > 1 ){
//            return $this->render('ionic/tabs.html.twig', array(
//                'name' => 'Fabien'));
//        }

        // Generate a unique name for the file before saving it
//        $fileName = md5(uniqid()).'.'.$file[0]->guessExtension();
        $file->move($this->get('kernel')->getRootDir() . '/../web',"222.jpg");
        $path = $this->get('kernel')->getRootDir() . '/../web';

        if ($path!=null) {
            return $this->render('ionic/tabs.html.twig', array(
                'name' => 'Fabien'));
        }
//        return '<img src=$file>';?


    }


}