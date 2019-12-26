<?php

function is_logged_in()
{
    $ci = get_instance(); //instansiasi CI / Library CI
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        // cek siapa yg login berdasarkan role
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        //query tabel menu berdasarkan nama menu untuk mendapatkan namamenu
        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        //cek
        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}


function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}
