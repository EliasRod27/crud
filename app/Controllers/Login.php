<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    } 

    public function signin()
    {
        $datas = $this->request->getPost();

        if($datas["user"] && $datas["password"]){

            $userModel = new UsersModel();
            $datasUser = $userModel->getByUser($datas["user"]);

            if (count($datasUser) > 0) {
                if ($datas["password"] === $datasUser['password']) {
                    session()->set('isLoggedIn', true);
                    session()->set('user', $datasUser['user']);
                    return redirect()->to('/');
                } else {
                    session()->setFlashdata('msg', 'ಠ⁠_⁠ಠ Usuário ou senha incorreto');
                    return redirect()->to('/login');
                }
            } else {
                session()->setFlashdata('msg', 'ಠ⁠_⁠ಠ Usuário ou senha incorreto');
                return redirect()->to('/login');
            }
            
        }else {
            session()->setFlashdata('msg', 'ಠಿ⁠_⁠ಠ Preencha todos os campos');
            return redirect()->to('/login');
        }
    }
}