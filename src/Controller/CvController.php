<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    #[Route('/cv/{nom}/{prenom}/{age}/{section}/{_locale?fr}/{slug?symfony}.{_format?html}',
     name: 'app_cv', 
     requirements:[
        "_locale"=>"fr|en",
        "section"=>"rt|gl",
        "age"=> "\d{1,2}"
        
        
   ])]
    
    public function index($nom, $prenom,$age, $section ): Response
    {

         //$nom="maha";
         //$prenom="abid"; 
         //$age=18 ; 
         //$section="rt";
        
        return $this->render('cv/index.html.twig', [
            'name' => $nom,
            'prenom'=>$prenom,
            'age'=>$age,
            'section'=>$section
        ]);
    }
}
