<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Compte;
use Validator;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $comptes = Compte::all();
        return $this->sendResponse($comptes->toArray(), 'Comptes retrieved successfully.');
    }
}
