<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
         /**
      * @Route("/")
      */

    public function number(): Response
    {
       
      

    
        return $this->render('/home.html.twig', [
                    
                    ]);
    }

         /**
      * @Route("/test")
      */

      public function z(): Response
      {
         
          $connectionParams = array(
            'url' => "postgresql://user_resoneo__readonly2:sfx_yhbbuAHJXhH5eee45DHJEa@51.83.37.209:5433/sekoya?serverVersion=13&charset=utf8",
        );
        $sql = "SELECT job_status, count(*)
        FROM queue.jobs 
        WHERE 1=1
        -- filter about date :             AND job_added_at::date = <date>
        -- filter about descriptor :   AND job_descriptor::date ILIKE <free_search_string>
        GROUP BY job_status ";

       

        $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

        $stmt = $conn->query($sql); // Simple, but has several drawbacks

        $arr = array();
        while (($row = $stmt->fetchAssociative()) !== false) {
          array_push($arr,$row['job_status'] ) ;
      }

          return $this->render('/pog.html.twig', [
                      'conn' => $arr
                      ]);
      }
}

