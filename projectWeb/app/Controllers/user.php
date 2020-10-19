<?php

namespace App\Controllers;

use App\Models\M_user;

class user extends BaseController
{
    public function regis()
    {
        $userdata = new M_user();
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $data = array(
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        );

        $userdata->saveUser($data);
        return redirect()->to('/signin');
    }
}
