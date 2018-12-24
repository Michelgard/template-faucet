<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('BTC')){
    function BTC($Api, $affil, $valGain){
        
        $CI = & get_instance();
        $CI->load->model('liens_model');
        
        $i=0;
        $char = 'abcdefghijklmnopqrstuvwxyz0123456789';
        while ($i==0){
            //code afiliation
            $codeLien = 'lLlL' . substr(str_shuffle($char), '0', 6);
            $resultat =  $CI->liens_model->get_lien_code($codeLien);
            if (!$resultat){
                $i=1;
            }
        }
        
        $long_url = base_url() .  $codeLien;
        $api_token = $Api;
        $api_url = "https://clicksfly.com/api/?api={$api_token}&url={$long_url}&alias=CustomAlias";
        $options=array(
          CURLOPT_URL            => $api_url, // Url cible (l'url la page que vous voulez télécharger)
          CURLOPT_RETURNTRANSFER => true, // Retourner le contenu téléchargé dans une chaine (au lieu de l'afficher directement)
          CURLOPT_HEADER         => false // Ne pas inclure l'entête de réponse du serveur dans la chaine retournée
        );
        $CURL=curl_init();
        curl_setopt_array($CURL,$options);
        $result=curl_exec($CURL);      // Le contenu téléchargé est enregistré dans la variable $content. Libre à vous de l'afficher.
        $statusCode = curl_getInfo($CURL, CURLINFO_HTTP_CODE);
        curl_close($CURL);
        
        if($statusCode == 200){
            $json = json_decode($result, true);
            if($json["status"] == "success"){
                $CI->liens_model->insert_lien($affil, $codeLien, $json["shortenedUrl"], $valGain, 'BTC', '0', '0');
                //echo $json["shortenedUrl"];
                return $json["shortenedUrl"];
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
        
    }
}

if (!function_exists('COIN')){
    function COIN($Api, $affil, $valGain){
        
        $CI = & get_instance();
        $CI->load->model('liens_model');
        
        $i=0;
        $char = 'abcdefghijklmnopqrstuvwxyz0123456789';
        while ($i==0){
            //code afiliation
            $codeLien = 'lLlL' . substr(str_shuffle($char), '0', 6);
            $resultat =  $CI->liens_model->get_lien_code($codeLien);
            if (!$resultat){
                $i=1;
            }
        }
        
        $long_url = base_url() .  $codeLien;
        $api_token = $Api;
        $api_url = "http://vivads.net/api/?api={$api_token}&url={$long_url}";
        $options=array(
          CURLOPT_URL            => $api_url, // Url cible (l'url la page que vous voulez télécharger)
          CURLOPT_RETURNTRANSFER => true, // Retourner le contenu téléchargé dans une chaine (au lieu de l'afficher directement)
          CURLOPT_HEADER         => false // Ne pas inclure l'entête de réponse du serveur dans la chaine retournée
        );
        $CURL=curl_init();
        curl_setopt_array($CURL,$options);
        $result=curl_exec($CURL);      // Le contenu téléchargé est enregistré dans la variable $content. Libre à vous de l'afficher.
        $statusCode = curl_getInfo($CURL, CURLINFO_HTTP_CODE);
        curl_close($CURL);
        
        if($statusCode == 200){
            $json = json_decode($result, true);
            if($json["status"] == "success"){
                $CI->liens_model->insert_lien($affil, $codeLien, $json["shortenedUrl"], $valGain, 'COIN', '0', '0');
                //echo $json["shortenedUrl"];
                return $json["shortenedUrl"];
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
        
    }
}

if (!function_exists('SHORTE')){
    function SHORTE($Api, $affil, $valGain){
        
        $CI = & get_instance();
        $CI->load->model('liens_model');
        
        $i=0;
        $char = 'abcdefghijklmnopqrstuvwxyz0123456789';
        while ($i==0){
            //code afiliation
            $codeLien = 'lLlL' . substr(str_shuffle($char), '0', 6);
            $resultat =  $CI->liens_model->get_lien_code($codeLien);
            if (!$resultat){
                $i=1;
            }
        }
        
        
        $long_url = base_url() .  $codeLien;
        $api_token = $Api;
        $api_url = "https://api.shorte.st/s/{$api_token}/{$long_url}";
        $options=array(
          CURLOPT_URL            => $api_url, // Url cible (l'url la page que vous voulez télécharger)
          CURLOPT_RETURNTRANSFER => true, // Retourner le contenu téléchargé dans une chaine (au lieu de l'afficher directement)
          CURLOPT_HEADER         => false // Ne pas inclure l'entête de réponse du serveur dans la chaine retournée
        );
        $CURL=curl_init();
        curl_setopt_array($CURL,$options);
        $result=curl_exec($CURL);      // Le contenu téléchargé est enregistré dans la variable $content. Libre à vous de l'afficher.
        //print_r($result);
        $statusCode = curl_getInfo($CURL, CURLINFO_HTTP_CODE);
        curl_close($CURL);
        
        if($statusCode == 200){
            $json = json_decode($result, true);
            if($json["status"] == "ok"){
                $CI->liens_model->insert_lien($affil, $codeLien, $json["shortenedUrl"], $valGain, 'SHORTE', '0', '0');
                //echo $json["shortenedUrl"];
                return $json["shortenedUrl"];
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
        
    }
}

