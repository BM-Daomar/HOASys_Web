<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/General.php");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Content-Type");


class Dashboard extends General
{
    protected $title = 'Admin';

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("id_admin")) {
        } else {
            redirect(base_url('Login'));
        }
    }

    public function index()
    {
        $data['title'] = $this->title;
        $role = $this->session->userdata("role");
        // if ($role == "Admin") {
            $this->load_template_view('templates/dashboard/index', $data);
        // } else {
            // redirect(base_url('participants'));
        //     redirect(base_url('homeowners'));
        // }
    }
}
