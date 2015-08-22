<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UsersController extends AppController {

    public $uses = array('User');

    public function signin () { // Login
        
        if ($this->Auth->user()) {
            $this->redirect(array('controller' => 'visitors', 'action' => 'index'));
        }        
        
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('IDもしくはパスワードが間違っています。'));
            }
        }        
    }

    public function signup () {
        
        if ($this->Auth->user()) {
            $this->redirect(array('controller' => 'visitors', 'action' => 'index'));
        }        
        
        if ($this->request->is('post')) {
            $this->User->create();
            
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('ユーザー登録が完了しました。'));
                $this->redirect(array('controller' => 'visitors', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('ユーザーを登録できません。'));
            }
        }       
    }
    
    public function logout () {
        $this->redirect($this->Auth->logout());        
    }
    
}