<?php

    if(isset($header) && $header)
        $this->load->view('admin/admin_base/header');

    if(isset($sidebar) && $sidebar)
        $this->load->view('admin/admin_base/sidebar');

    if(isset($_view))
        $this->load->view('admin/'.$_view);

    if(isset($footer) && $footer)
        $this->load->view('admin/admin_base/footer');

?>