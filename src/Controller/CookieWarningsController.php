<?php
namespace CookieWarning\Controller;

use CookieWarning\Controller\AppController;

class CookieWarningsController extends AppController
{

    public function displayInfo()
    {
        $this->viewBuilder()->layout(FALSE);
    }

    public function displayDetail()
    {
    }
}
