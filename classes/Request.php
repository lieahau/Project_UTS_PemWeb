<?php
class RequestData{
    protected $val;

    public function __construct($val){
        $this->val = $val;
    }

    public function raw(){
        return $this->val;
    }

    public function safe(){
        if (is_string($this->val))
           return htmlspecialchars($this->val);
        return $this->val;
    }

    public function sanitizeEmail(){
        return filter_var($this->val, FILTER_SANITIZE_EMAIL);
    }

    public function isValidText(){
        if(preg_match('/^[a-zA-Z0-9]+$/', $this->val))
            return true;
        return false;
    }

    public function isValidDate(){
        $min = new DateTime('1920-01-01'); // date ga boleh lebih kecil dari ini
        $min = $min->format('Y-m-d'); 
        $max = date('Y-m-d', time()); // date ga boleh lebih besar dari waktu sekarang

        if($this->val < $min || $this->val > $max)
            return false;
        else
            return true;
    }
}

class Request{
    public static function get($varName, $defaultValue = false){
        if (isset($_GET[$varName]))
            return new RequestData($_GET[$varName]);

        return new RequestData($defaultValue);
    }

    public static function post($varName, $defaultValue = false){
        if (isset($_POST[$varName]))
            return new RequestData($_POST[$varName]);

        return new RequestData($defaultValue);
    }

}
?>
