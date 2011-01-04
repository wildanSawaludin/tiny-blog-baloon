<?php
/**
 * Description of main
 *
 * @author      Maikel Chandika <mike_hellsing@yahoo.com>
 */
class Main extends Controller {
    function Main() {
        parent::controller();
        $this->load->model('thpost_model', '', TRUE);
        $this->load->model('tdpost_model', '', TRUE);
        $this->load->model('tmgeneral_model', '', TRUE);
        $this->load->model('tmuser_model', '', TRUE);        
    }

    function index() {
        echo 'Halo Girls!';
    }

}
?>
