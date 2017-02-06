<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        // Below code block is to return response without template
        //  return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        // );

        // To render template
        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));

    }
}
