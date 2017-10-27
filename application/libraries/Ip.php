<?php
/**
 * Récupérer la véritable adresse IP d'un visiteur
 */
class Ip{
    function get_ip() {
        if (getenv('HTTP_X_FORWARDED_FOR')) { return getenv('HTTP_X_FORWARDED_FOR'); }
        elseif (getenv('HTTP_CLIENT_IP')) { return getenv('HTTP_CLIENT_IP'); }
        else { return getenv('REMOTE_ADDR'); }
    }
}