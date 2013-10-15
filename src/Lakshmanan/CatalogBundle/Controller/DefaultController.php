<?php

namespace Lakshmanan\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        
            
        $repository = $this->getDoctrine()->getRepository('LakshmananCatalogBundle:Product');
        
        
        $query = $repository->createQueryBuilder('p')//->getQuery();
                            ->select()
                            ->where('p.id = :id')//->getQuery();
                            ->setParameter('id',$name)->getQuery();
                
       
        try {   
       
            $result = $query->getSingleResult();   
            $result1 = null;
        
       }catch(\Doctrine\ORM\NoResultException $e) {
           $query = $repository->createQueryBuilder('p')
                               ->select()
                               ->getQuery();              
           
            $result1 = $query->getResult();
            $result = null;
           
                   
       }
        // $result = $query->getResult();  
        
        
        
        
        return $this->render('LakshmananCatalogBundle:Default:index.html.twig', array('result' => $result,'result1' => $result1));
    }
}
