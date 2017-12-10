<?php

namespace App\SandboxBundle\Test;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @author    Tomasz Karliński <karlinski.tomasz@gmail.com>
 * @copyright 2017 tkarlinski
 * @package   App\SandboxBundle\Test
 * @since     2017-11-23
 * @version   Release: $Id$
 */
class PostControllerTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/post/hello-world');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Hello World")')->count()
        );
    }
}