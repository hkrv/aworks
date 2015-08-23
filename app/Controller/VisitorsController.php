<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class VisitorsController extends AppController {

    public $uses = array('User', 'Detail');

    public function beforeFilter() {
        parent::beforeFilter();
    }    
        
    public function index () {
        $detail_datas = $this->Detail->get_detail_datas();
        $this->set('detail_datas', $detail_datas);
    }

    public function all () {
        $detail_datas = $this->Detail->get_detail_datas();
        $this->set('detail_datas', $detail_datas);
    }    
    
    public function category ($category_name = '') {
        $detail_datas = $this->Detail->get_detail_datas($category_name);
        $this->set('detail_datas', $detail_datas);
    }   
    
    public function area ($prefecture = '') {
        $detail_datas = $this->Detail->get_detail_datas(NULL, $prefecture);
        $this->set('detail_datas', $detail_datas);       
    }    
    
    public function detail ($detail_id = NULL) {
        $detail_data = $this->Detail->get_detail_data_by_id($detail_id);
        $this->set('detail_data', $detail_data);        
    }

    public function app_form ($detail_id = NULL) {
        if ($this->request->is('post')) {
            if ($this->Detail->save($this->request->data)) {
                $this->Session->setFlash('登録に成功しました');
                return $this->redirect('/');
            }
        }   
    }    
    
}
