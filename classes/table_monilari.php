<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of table_monilari
 *
 * @author pascalaudet
 */
class table_monilari {
    
  private $id;//` int(11) NOT NULL,
  private $rouge;//`int
  private $vert;//` int
  private $bleu;
//  private $log;//` text  200 COLLATE utf8_unicode_ci NOT NULL,
//  private $temps;
//  private $moment;
//  private $chiffA;
//  private $chiffB;
//  private $cur;
  private $jour;
  private $heure;
  
    
    

    function __constructor($id, $rouge, $vert, $bleu,$jour,$heure)
    {
        $this->id = $id;
        $this->rouge = $rouge;
        $this->vert = $vert;
        $this->bleu = $bleu;
//        $this->temps = $temps;
//        $this->moment=$moment;
//        $this->chiffA=$chiffA;
//        $this->chiffB=$chiffB;
//        $this->cur=$cur;
        $this->jour=$jour;
        $this->heure=$heure;
    }

    function set_id($id)
    {
        $this->id = $id;
    }
    
     function set_rouge($rouge)
    {
        $this->rouge = $rouge;
    }
     function set_vert($vert)
    {
        $this->vert = $vert;
    }
    function set_bleu($bleu)
    {
        $this->bleu = $bleu;
    }
    
    
//     function set_log($log)
//    {
//        $this->log = $log;
//    }
//    function set_temps($temps)
//    {
//        $this->temps = $temps;
//    }  
//    function set_moment($moment)
//    {
//        $this->moment = $moment;
//    } 
//    function set_chiffA($chiffA)
//    {
//        $this->chiffA = $chiffA;
//    }      
//     function set_chiffB($chiffB)
//    {
//        $this->chiffB = $chiffB;
//    }    
//     function set_cur($cur)
//    {
//        $this->cur = $cur;
//    }
    function set_jour($jour)
    {
        $this->jour = $jour;
    }
    function set_heure($heure)
    {
        $this->heure = $heure;
    }  
    
    
    function get_id()
    {
        return $this->id;
    }

    function get_rouge()
    {
        return $this->rouge;
    }

    function get_vert()
    {
        return $this->vert;
    }
    
    function get_bleu()
    {
        return $this->bleu;
    }
//    function get_log()
//    {
//        return $this->log;
//    }
//    function get_temps()
//    {
//        return $this->temps;
//    } 
//    function get_moment()
//    {
//        return $this->moment;
//    }  
//    function get_chiffA()
//    {
//        return $this->chiffA;
//    }  
//    function get_chiffB()
//    {
//        return $this->chiffB;
//    }  
//    function get_cur()
//    {
//        return $this->cur;
//    } 
    function get_jour()
    {
        return $this->jour;
    }
    function get_heure()
    {
        return $this->heure;
    }
    
 }
?>
