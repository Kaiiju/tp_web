<?php

class RecipeController extends MY_Controller
{
    public function index()
    {
        $data = array(
            'pageTitle' => "WOW"
        );

        $this->renderView('recipe/main', $data);

    }

    /**
     * get a recipe
     * 
     * @param int $id
     */
    public function recipe(int $id){return true;}
}