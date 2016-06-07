<?
class Auth extends Controller{
    public function  __construct() {
        parent::__construct();
    }
    public function login(){
        $this->setOutput('auth/login.tpl');
    }
    public function forgottenPass(){
        $this->setOutput('auth/forgottenPass.tpl');
    }
}