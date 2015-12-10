<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class file_sequenziali
    {
        public $content = array();
        
        public function __construct($link) 
        {
            $punt=fopen($link,"r+");
            $this->content=file($link);
            fclose($punt);
        }
        
        public function preleva_matricole()
        {
            $array_matricole = array();
            for($i=1;$i<count($this->content);$i++)
            {
                $array_matricole[]=$this->suddividi($i);
            }
            $array_matricole = array_unique($array_matricole);
            return $array_matricole;
        } 
       
        public function ricerca_studenti($matricola)
        {
            $array_dati = array();
            $array_dati[]=$this->content[0];
            
            for($i=1;$i<count($this->content);$i++)
            {
                if(strcmp($matricola,$this->suddividi($i))==0)
                {
                    $array_dati[]=$this->content[$i];
                }
                
            }
            
            return $array_dati;
            
        }
        
        public static function scrivi_dati($link,$stringa)
        {
            $var=fopen($link,"a+");
            fwrite($var, $stringa);
            fclose($var);
        }
        
        public function suddividi($index)
        {
            $res = explode(";", $this->content[$index]);
            return $res[0];
            
        }
    }
?>

