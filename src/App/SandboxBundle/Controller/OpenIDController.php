<?php

namespace App\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OpenIDController extends Controller
{

    /**
     * @Route("/open-id/authorize", name="app_openId_authorize_get", methods={"GET"})
     *
     * @return \OAuth2\Response|\Symfony\Component\HttpFoundation\Response
     */
    public function validAuthorizeAction()
    {
        $server = $this->get('oauth2.server');
        $server->setConfig('use_openid_connect', true);
        $server->setConfig('issuer', 'mt-auth');
        $server->addStorage($this->get('app.open_id.storage.authorization_code'), 'authorization_code');

        $request = $this->get('oauth2.request');
        $response = $this->get('oauth2.response');


        if (!$server->validateAuthorizeRequest($request, $response)) {
            return $server->getResponse();
        }

        return $this->render('AppSandboxBundle:OpenID:validAuthorize.html.twig', [
            'client_id' => $request->query->get('client_id'),
            'response_type' => $request->query->get('response_type')
        ]);
    }

    /**
     * @Route("/open-id/authorize", name="app_openId_authorize_post", methods={"POST"})
     */
    public function authorizeFormSubmit()
    {
        $server = $this->get('oauth2.server');
        $request = $this->get('oauth2.request');
        $response = $this->get('oauth2.response');

        $authorized = boolval($request->request->get('authorize'));

        return $server->handleAuthorizeRequest($request, $response, $authorized);
    }
}
