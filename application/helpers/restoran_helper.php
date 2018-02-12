<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function cek_manager(){
        $CI = &get_instance();
        $session = $CI->session->userdata('status_manager');
        if($session!='oke'){
            redirect('manager');
        }
    }
    
    function cek_pelayan(){
        $CI = &get_instance();
        $session = $CI->session->userdata('status_pelayan');
        if($session!='oke'){
            redirect('pelayan');
        }
    }
    
    function cek_koki(){
        $CI = &get_instance();
        $session = $CI->session->userdata('status_koki');
        if($session!='oke'){
            redirect('koki');
        }
    }
    
    function cek_kasir(){
        $CI = &get_instance();
        $session = $CI->session->userdata('status_kasir');
        if($session!='oke'){
            redirect('kasir');
        }
    }
    
    function cek_pantry(){
        $CI = &get_instance();
        $session = $CI->session->userdata('status_pantry');
        if($session!='oke'){
            redirect('pantry');
        }
    }
    
    
    

