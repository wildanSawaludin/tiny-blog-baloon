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
//        $this->load->model('tdpost_model', '', TRUE);
//        $this->load->model('tmgeneral_model', '', TRUE);
//        $this->load->model('tmuser_model', '', TRUE);        
    }

    var $limit = 3;

    function index() {
        $this->get_last_ten_post();
    }

    function get_last_ten_post($offset = 0) {
        $data['main_view'] = 'post/post_list';
        $uri_segment = 3;
        $offset = $this->uri->segment($uri_segment);

        $thposts = $this->thpost_model->get_last_ten_post($this->limit, $offset)->result();
        $num_rows = $this->thpost_model->count_all_num_rows();

        if ($num_rows > 0) {
            // Membuat pagination
            $config['base_url'] = site_url('main/get_last_ten_post');
            $config['total_rows'] = $num_rows;
            $config['per_page'] = $this->limit;
            $config['uri_segment'] = $uri_segment;
            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            $tmpl = array('table_open' => '<table border="0" cellpadding="0" cellspacing="0">',
                'row_alt_start' => '<tr class="zebra">',
                'row_alt_end' => '</tr>'
            );
            $this->table->set_template($tmpl);
            // Set heading untuk tabel
            $this->table->set_empty("&nbsp;");
            // Penomoran baris data
            $i = 0 + $offset;

            foreach ($thposts as $thpost) {
                // Penyusunan data baris per baris, perhatikan pembuatan link untuk updat dan delete
                $this->table->add_row(++$i,'.', $thpost->judul);
            }
            $data['table'] = $this->table->generate();
        } else {
            echo 'Data Kosong!';
        }
        $this->load->view('template', $data);
    }

}

?>
