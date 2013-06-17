<?php

/**
 * @author soadilya
 * @copyright 2012
 */

defined('SYSPATH') or die('No direct access allowed.');
// Описание класса
class Controller_Login extends Controller_Template {
    public $template = 'loginform';
    public $main_page = '';
    
    public function before()
    {
        parent::before();
        View::set_global('header', View::factory('header'));				
        //$this->template->content = '';
    }
    // Просмотр пользовательских данных
    public function action_view()
    {
    // Проверям, залогинен ли пользователь
    if(Auth::instance()->logged_in())
            {
                // Если да, то здороваемся и предлагаем выйти. Это можно было и в виде view реализовать
                return $this->request->redirect('admin/index');
            }
    else
        {
            // А если он не залогинен, отправляем логиниться
            return $this->request->redirect('/');
        }

    }

    // Метод разлогивания
    public function action_logout()
    {
    // Пытаемся разлогиниться
    if (Auth::instance()->logout())
        {
            // Если получается, то предлагаем снова залогиниться
            return $this->request->redirect('/');
        }
    else
        {
            // А иначе - пишем что не удалось
            echo 'fail logout';
        }
    }

    // Метод логина
    public function action_login()
    {
        // Проверям, вдруг пользователь уже зашел
         if(Auth::instance()->logged_in())
            {
            // И если это так, то отправляем его сразу на страницу пользователей
            return $this->request->redirect('admin/index');
            }

        // Если же пользователь не зашел, но данные на страницу пришли, то:
        if ($_POST)
        {
            // Создаем переменную, отвечающую за связь с моделью данных User
            $user = ORM::factory('user');
            isset($_POST['checkbox']) ? $checkbox=false : $checkbox=true;
            // в $status помещаем результат функции login
            $status = Auth::instance()->login($_POST['username'], $_POST['password'], $checkbox);
            // Если логин успешен, то
            if ($status)
            {
                // Отправляем пользователя на его страницу
                return $this->request->redirect('admin/index');
            }
            else
            {
                // Иначе ничего не получилось, пишем failed
                echo 'failed';
            }
        }
        // Грузим view логина
            //$content = View::factory('loginform');
            //$this->template->content = $content;
            //$this->response->body(View::factory('form'));
    }

    public function action_index()
    {
        //$head='';
        // Тут можно сделать ссылки на вход и регистрацию
    }
    // Регистрация пользователей
    public function action_register()
    {
    // Если есть данные, присланные методом POST
    if ($_POST)
        {
        // Создаем переменную, отвечающую за связь с моделью данных User
        $model = ORM::factory('user');
        // Вносим в эту переменную значения, переданные из POST
        $model->values(array(
           'username' => $_POST['username'],
           'email' => $_POST['email'],
           'password' => $_POST['password'],
           'password_confirm' => $_POST['password_confirm'],
        ));
        try
        {
            // Пытаемся сохранить пользователя (то есть, добавить в базу)
            $model->save();
            // Назначаем ему роли
            $model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
            // И отправляем его на страницу пользователя
                HTTP::redirect('login/view/');
        }
        catch (ORM_Validation_Exception $e)
        {
            // Это если возникли какие-то ошибки
            echo $e;
        }
        }
        // Загрузка формы логина
        $this->response->body(View::factory('register'));
    }
    
}