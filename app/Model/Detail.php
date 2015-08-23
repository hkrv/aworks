<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

class Detail extends Model {
    
    public $primaryKey = 'detail_id';     
    
    public function get_detail_datas($category_name = NULL, $prefecture = NULL){
        
        if(isset($category_name)){
            $detail_datas = $this->find('all', array(
                'conditions' => array('category_name' => $category_name)
            ));
        }else if(isset($prefecture)){
            $detail_datas = $this->find('all', array(
                'conditions' => array('prefecture LIKE' => '%'. $prefecture. '%')
            ));
        }else{
            $detail_datas = $this->find('all');            
        }
        
        return $detail_datas;
    }
    
    public function get_detail_data_by_id($detail_id){
        
        $detail_data = $this->find('first', array(
            'conditions' => array('detail_id' => $detail_id)
        ));
        
        return $detail_data;        
    }
    
}
