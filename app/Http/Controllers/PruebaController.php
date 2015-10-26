<?php

namespace Cinema\Http\Controllers;

class PruebaController extends Controller{
    /**
     * Create a new password controller instance.
     *
     * @return Response
     */
    public function index()
    {
        return "Hola desde Controller";
    }

    public function nombre($nombre)
    {
        return "Hola desde Controller mi nombre es: ".$nombre;
    }

}
