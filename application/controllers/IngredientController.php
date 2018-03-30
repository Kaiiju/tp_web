<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IngredientController extends MY_Controller
{
    public function index()
    {
        $this->load->model('IngredientModel');

    }

}