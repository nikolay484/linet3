<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormBackupFile
 *
 * @author adam
 */
class FormBackupFile extends CFormModel{
    public $file;
    
    public function rules(){
        return array(
            array('file','file','allowEmpty'=>false,'types'=>'sql, bak'),
            array('file', 'safe')
        );
        
    }
    //put your code here
}

?>
