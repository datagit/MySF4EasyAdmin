<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 2/24/18
 * Time: 2:37 PM
 */

namespace App\Controller;

// src/Controller/DefaultController.php
// ...

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function admin()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}