<?php
namespace CookieWarning\Controller;

use CookieWarning\Controller\AppController;

class CookieWarningsController extends AppController
{
    /**
     * Display Info
     *
     * @return void
     */
    public function displayInfo()
    {
        $this->viewBuilder()->layout(false);
    }

    /**
     * Display Detail
     *
     * @return void
     */
    public function displayDetail()
    {
    }
}
