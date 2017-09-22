<?php

namespace App\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ClientCredentialsController extends Controller
{
    /**
     * Endopoing ClientCredentials/token
     * Zwraca token autoryzacyjny.
     *
     * @ApiDoc(
     *     resource=true,
     *     description="Metoda zwraca token autoryzacyjny na podstawie client_id i client_secret",
     *     requirements={
     *          {
     *              "name"="grant_type",
     *              "dataType"="string",
     *              "requirement"="client_credentials|user_credentials",
     *              "description"="Typ zapytania"
     *          }
     *     },
     *     parameters={
     *          {"name"="scope", "dataType"="string", "required"=false, "format"="string", "description"="Zakres uprawnień"}
     *     },
     *     headers={
     *          {
     *              "name"="Authorization",
     *              "description"="Basic encrypted client_id i client_secret"
     *          }
     *     },
     *     statusCodes={
     *          200="Success",
     *          403="User not authorized"
     *     }
     * )
     *
     * @Route("/cc/token", name="app_cc_token", methods={"POST"})
     */
    public function tokenAction()
    {
        $server = $this->get('oauth2.server');

        // Add Grant Types
        $server->addGrantType($this->get('oauth2.grant_type.client_credentials'));

        return $server->handleTokenRequest($this->get('oauth2.request'), $this->get('oauth2.response'));
    }

    /**
     * @ApiDoc(
     *     description="Retrieve list of users.",
     *     statusCodes={
     *         400 = "Validation failed."
     *     },
     *     responseMap={
     *          200 = "FooBundle\Entity\User",
     *         400 = {
     *             "class"="CommonBundle\Model\ValidationErrors",
     *             "parsers"={"Nelmio\ApiDocBundle\Parser\JmsMetadataParser"}
     *         }
     *     }
     *  )
     *
     * @Route("/cc/test", name="app_cc_test", methods={"GET"})
     */
    public function testAction()
    {
        return null;
    }

}
