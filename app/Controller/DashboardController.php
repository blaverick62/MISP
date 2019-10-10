<?php
App::uses('AppController', 'Controller');

class DashboardController extends AppController
{
    public $components = array(
        'Security',
        'RequestHandler'
    );

    public function view()
    {
        header("Location: /dashboard");
    }
}