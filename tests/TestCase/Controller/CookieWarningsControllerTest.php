<?php
namespace CookieWarning\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestCase;
use CookieWarning\Controller\CookieWarningsController;

/**
 * CookieWarning\Controller\CookieWarningsController Test Case
 */
class CookieWarningsControllerTest extends IntegrationTestCase
{

    /**
     * Test displayInfo method
     *
     * @return void
     */
    public function testDisplayInfoAccess()
    {
        $this->get('/cookie_warning/cookie-warnings/display-info');
        $this->assertResponseOk();
        $this->assertResponseContains('Utilisation des cookies');
    }

    /**
     * Test displayDetail method
     *
     * @return void
     */
    public function testDisplayDetail()
    {
        $this->get('/cookie_warning/cookie-warnings/display-detail');
        $this->assertResponseOk();
        $this->assertResponseContains('A QUOI SERVENT LES COOKIES EMIS SUR NOS SITES');
    }

    public function testWhitePageWithNoCookieSet()
    {
        $this->cookie('cookie_warning', '');
        $this->get('/');
        $this->assertResponseContains('cookie_warning/cookie-warnings/display-info');
    }

    public function testWhitePageWithCookieSetOnAWhitePage()
    {
        $this->cookie('cookie_warning', '/');
        $this->get('/');
        $this->assertResponseNotContains('cookie_warning/cookie-warnings/display-info');
    }
}
