<?php

namespace App\Controllers;

use App\Models\M_user;
use App\Models\M_userProfile;
use CodeIgniter\Controller;

class User extends Controller
{
    public function signin()
    {
        return view('Page/signin');
    }

    public function signup()
    {
        return view('Page/signup');
    }

    public function regis()
    {
        $val = $this->validate(
            [
                'username' => [
                    'rules' => 'required|is_unique[login.username]',
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
            // Code sebelumnya
            // $pesanValidasi = \Config\Services::validation();
            // return redirect()->to('/signup')->withInput()->with('validate', $pesanValidasi);

            session()->setFlashData('pesan', 'Sorry, the email or password is already used!');
            return redirect()->to('/signup');
        } else {
            $userdata = new M_user();
            $submitAs = $this->request->getPost('submit');
            $level = 0;
            if ($submitAs == 'student') {
                $level = 1;
            } else {
                $level = 2;
            }
            // $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $data = array(
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'level' => $level,
            );

            $data2 = array(
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
            );

            $userdata->saveUser($data);
            if ($submitAs == 'student') {
                $userdata->saveSiswa($data2);
            } else {
                $userdata->savePengajar($data2);
            }

            session()->setFlashData('pesan', 'Congratulation you have successfully registered, Please login!');
            return redirect()->to('/signin');
        }
    }
    public function login()
    {
        helper('cookie');
        $userdata = new M_user();
        $table = 'login';
        $rm = $this->request->getPost('rm');
        $email_username = $this->request->getPost('email_username');
        $password = $this->request->getPost('password');
        $row = $userdata->get_data_login($email_username, $email_username, $table);
        $level = $row->level;
        if ($level == 1) {
            $row2 = $userdata->get_data_siswa($row->email);
        } else {
            $row2 = $userdata->get_data_pengajar($row->email);
        }

        if ($row == NULL) {
            session()->setFlashData('pesan', 'Sorry! your email/username and password doesn\'t match');
            return redirect()->to('/signin');
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'email' => $row->email,
                'username' => $row->username,
                'level' => $level,
                'id' => $row2->id,
            );
            session()->set($data);

            if ($rm == 'on') {
                setcookie('log', 'true', time() + 10000, '/', '');
                setcookie('email', $row->email, time() + 10000, '/', '');
                setcookie('username', $row->username, time() + 10000, '/', '');
                setcookie('id', $row2->id, time() + 10000, '/', '');
            }

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
        setcookie('log', '', time() - 10000, '/', '');
        setcookie('email', '', time() - 10000, '/', '');
        setcookie('username', '', time() - 10000, '/', '');
        setcookie('id', '', time() - 10000, '/', '');
        return redirect()->to('/dashboard');
    }
    public function edit($id)
    {
        $model2 = new M_userProfile();
        $data['user'] = $model2->getUser($id)->getRow();
        echo view('Page/profileEdit', $data);
    }
    public function update()
    {
        $model2 = new M_userProfile();
        $$id = $this->request->getPost('id');
        $data = array(
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('jenis_kelamin'),
            'birtdate' => $this->request->getPost('tanggal_lahir')
        );
        $model2->updateUser($data, $id);
        return redirect()->to('/');
    }
}
