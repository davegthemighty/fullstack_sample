<?php

namespace Daveg\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
/* Request Components*/
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{

  /**
   * @Route("/login", name="login")
   */
    public function loginAction(Request $request)
    {

      $authenticationUtils = $this->get('security.authentication_utils');

      // get the login error if there is one
      $error = $authenticationUtils->getLastAuthenticationError();

      // last username entered by the user
      $lastUsername = $authenticationUtils->getLastUsername();

      return $this->render('DavegSecurityBundle:Default:index.html.twig',
                           array(
                              'last_username' => $lastUsername,
                              'error'         => $error,
                                )
                          );
    }

}
