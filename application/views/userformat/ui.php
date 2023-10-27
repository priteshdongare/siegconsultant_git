<?php

    if(isset($header) && $header)
        $this->load->view('userformat/header');

    if(isset($_view))
        $this->load->view($_view);

    if(isset($footer) && $footer)
        $this->load->view('userformat/footer');

?>