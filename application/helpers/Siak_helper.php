<?php



function is_logged_in()
{
    $thisCi = get_instance();
    $checkEmail = $thisCi->session->userdata('email');

    if (!$checkEmail) {
        redirect('auth');
    } else {
        $role_id = $thisCi->session->userdata('role_id');
        $menu = $thisCi->uri->segment(1);



        if ($role_id == 1) {
            if ($menu == 'user') {
                redirect('blocked/index');
            }
        } else {
            if ($menu == 'jurnal') {
                redirect('blocked/index');
            }
            if ($menu == 'home') {
                redirect('blocked/index');
            }
            if ($menu == 'admin') {
                redirect('blocked/index');
            }
        }
    }
}
