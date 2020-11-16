<?php

namespace App\Controllers;

use App\Models\M_user;
use CodeIgniter\Controller;

class User extends Controller
{
    public function signin()
    {
        return view('Page/signin');
    }

    public function regis()
    {
        $val = $this->validate(
            [
                'username' => [
                    'required|is_unique[login.username]',
                    'errors' => [
                        'is_unique' => '{field} already used!'
                    ]
                ],
                'email' => [
                    'rules' => 'required|is_unique[login.email]',
                    'errors' => [
                        'is_unique' => '{field} already used!'
                    ]
                ],
                'password' => 'required',
            ],
        );
        if (!$val) {
            $pesanValidasi = \Config\Services::validation();
            return redirect()->to('/signup')->withInput()->with('validate', $pesanValidasi);
        } else {
            $userdata = new M_user();
            // $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $data = array(
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            );

            $userdata->saveUser($data);
            session()->setFlashData('pesan', 'Congratulation you have successfully registered, Please login!');
            return redirect()->to('/signin');
        }
    }
    public function login()
    {
        $userdata = new M_user();
        $table = 'login';
        $email_username = $this->request->getPost('email_username');
        $password = $this->request->getPost('password');
        $row = $userdata->get_data_login($email_username, $email_username, $table);
        if ($row == NULL) {
            session()->setFlashData('pesan', 'Sorry! your email/username and password doesn\'t match');
            return redirect()->to('/signin');
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'email' => $row->email,
                'username' => $row->username,
            );
            session()->set($data);
            session()->setFlashData('pesan', 'Login succesfully!');
            return redirect()->to('/');
        }
        session()->setFlashData('pesan', 'Sorry! your email/username and password doesn\'t match');
        return redirect()->to('/signin');
    }
    public function logout()
    {
        session()->setFlashData('pesan', 'Logout succesfully!');
        session()->destroy();
        return redirect()->to('/dashboard');
    }
}
