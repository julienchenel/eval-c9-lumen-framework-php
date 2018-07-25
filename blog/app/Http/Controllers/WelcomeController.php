<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;


class WelcomeController extends BaseController
{

        /**
         * Retrieve the user for the given ID.
         * @param  string  $name
         * @return Response
         */
        public function showAction()
        {

            $name = "Michel";

            return view('Welcome', ['name' => $name]);

        }
    }




