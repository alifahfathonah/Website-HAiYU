<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (isset($_COOKIE['log']) && isset($_COOKIE['email'])  && isset($_COOKIE['username']) ) {
            if ($_COOKIE['log'] == 'true') {
                $data = array(
                    'log' => TRUE,
                    'email' => $_COOKIE['email'],
                    'username' => $_COOKIE['username'],
                );
                session()->set($data);
            }
        }

        if (!session()->get('log')) {
            return redirect()->to('/dashboard');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // $session = session();
        // if ($session->get('log') == TRUE) {
        //     return redirect()->to('/');
        // }
    }
}
