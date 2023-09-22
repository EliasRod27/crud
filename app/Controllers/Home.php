<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController 
{

    public function index() {
        $session = \Config\Services::session();

        $isLoggedIn = $session->get('isLoggedIn');
        $user_logged = $session->get('user');

        $userModel = new UsersModel();
        $user = $userModel->findAll();

        $variables = [
            'users' => $user
        ];

        if ($isLoggedIn) {
            return view('home', $variables);
        } else {
            return redirect()->to('/login');
        }
    }

    public function register() {
        $datas = $this->request->getPost();

        if($datas["user"] && $datas["password"]){

            $userModel = new UsersModel();
            $datasUser = $userModel->getByUser($datas["user"]);

            if (count($datasUser) > 0) {
                session()->setFlashdata('msg', 'ಠ_ಠ Usuário já existe');
                return redirect()->to('/');
            } else {
                $request = $userModel->save($datas);

                if($request){
                    session()->setFlashdata('msg', '^⁠_⁠^ Usuário registrado!');
                    return redirect()->to('/');
                }else{
                    session()->setFlashdata('msg', 'ಠಿ⁠_⁠ಠ ERROR');
                    return redirect()->to('/');
                }
            }
            
        }else {
            session()->setFlashdata('msg', 'ಠಿ⁠_⁠ಠ Preencha todos os campos');
            return redirect()->to('/');
        }
    }

    public function filter() {
        $datas = $this->request->getPost();

        $userModel = new UsersModel();
        $datasUser = $userModel->searchUser($datas["search"]);

        session()->setFlashdata('search', $datasUser);
        return redirect()->to('/');

    }

    public function delete() {
        $datas = $this->request->getPost();

        $userModel = new UsersModel();
        $datasUser = $userModel->deleteUser($datas["user"]);
        return redirect()->to('/');

    }

    public function edit() {
        $datas = $this->request->getPost();

        $newUserData = [
            'user' => $datas['user'],
            'password' => $datas['password'],
        ];

        if($datas["user"] && $datas["password"]){

            $userModel = new UsersModel();
            $datasUser = $userModel->getByUser($datas["user"]);

            $defaultUser = $userModel->getByUser($datas["user_default"]);

            if (count($datasUser) > 0) {
                session()->setFlashdata('modal', 'ಠ_ಠ Usuário já existe');
                return redirect()->to('/');
            } else {
                $updated = $userModel->update($defaultUser['id'], $newUserData);

                if($updated){
                    session()->setFlashdata('modal', '^⁠_⁠^ Usuário alterado!');
                    return redirect()->to('/');
                }else{
                    session()->setFlashdata('modal', 'ಠಿ⁠_⁠ಠ ERROR');
                    return redirect()->to('/');
                }
            }
            
        }else {
            session()->setFlashdata('modal', 'ಠಿ⁠_⁠ಠ Preencha todos os campos para conseguir fazer a edição');
            return redirect()->to('/');
        }

        return redirect()->to('/');
    }
}