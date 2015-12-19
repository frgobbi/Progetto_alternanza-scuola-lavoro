<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    /*Definizione della classe "file_sequenziali", necessaria alla gestione del
     * file sequenziale contenente i dati relativi alle attività di alternanza
     * scuola lavoro (ASL).
     */
    class file_sequenziali
    {
        /*L'attributo definito nella classe è un array che rappresenta i record
         * del file sequenziale ($content).
         */
        public $content = array();
        /*Definizione del metodo costruttore della classe.
         * Tale metodo riceve in input il link del file e ne salva il contenuto
         * tramite la funzione "file()" all'interno dell'attributo "$content".
         */
        public function __construct($link) 
        {
            $punt=fopen($link,"r+");
            $this->content=file($link);
            fclose($punt);
        }
        /*Metodo "preleva_matricole()", necessaria alla generazione della
         * select contenente le matricole degli studenti per i quali si vogliono
         * conoscere i dettagli delle attività ASL.
         */
        public function preleva_matricole()
        {
            $array_matricole = array();
            for($i=1;$i<count($this->content);$i++)
            {
                /*Le matricole vengono ottenute mediante l'invocazione del 
                 * metodo "suddividi()" e vengono memorizzate in un array.
                 */
                $array_matricole[]=$this->suddividi($i);
            }
            /*Eliminazione dei duplicati dall'array tramite la funzione
             * "array_unique()".
             */
            $array_matricole = array_unique($array_matricole);
            return $array_matricole;
        } 
        /*Definizione del metodo "ricerca_studenti()". Tale metodo riceve in
         * input un parametro che rappresenta la matricola dello studente del
         * quale si vogliono ottenere le informazioni.
         */
        public function ricerca_studenti($matricola)
        {
            $array_dati = array();
            $array_dati[]=$this->content[0];
            
            for($i=1;$i<count($this->content);$i++)
            {
                //Ricerca dello studente con la matricola indicata.
                if(strcmp($matricola,$this->suddividi($i))==0)
                {
                    $array_dati[]=$this->content[$i];
                }
                
            }
            /*La funzione restituisce un array contenente tutti i record del
             * file associati allo studente con la matricola indicata in input.
             */
            return $array_dati;
            
        }
        /*Metodo statico "scrivi_dati", che consente di scrivere un record nel
         * file sequenziale data la locazione del file e la stringa da inserire.
         */
        public static function scrivi_dati($link,$stringa)
        {
            $var=fopen($link,"a+");
            fwrite($var, $stringa);
            fclose($var);
        }
        /*Metodo privato "suddividi()", utilizzato per estrapolare i campi dei
         * vari record del file sequenziale.
         */
        public function suddividi($index)
        {
            $res = explode(";", $this->content[$index]);
            return $res[0];
            
        }
    }
?>

