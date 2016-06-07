<?
class registration extends Controller{
    public function  __construct() {
        parent::__construct();
    }
    public function register(){
        $this->setOutput('registration/register.tpl');
    }
    public function checkOut(){
        $this->setOutput('registration/checkOut.tpl');
    }
    public function addPhoto(){
        $this->setOutput('registration/addPhoto.tpl');
    }
    public function otherInfo(){
        $this->setOutput('registration/otherInfo.tpl');
    }
}