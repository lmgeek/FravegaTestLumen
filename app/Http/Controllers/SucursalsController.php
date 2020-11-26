<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\SucursalRequest;
use Illuminate\Http\Request;
use App\Coordenades;
use App\Directions;
use App\Sucursals;
use App\Provinces;

class SucursalsController extends Controller
{
    function index()
    {
        return Provinces::All();
    }

    function store(Request $request)
    {
        $coordenades = new Coordenades();
        $direction = new Directions();
        $sucursal = new Sucursals();

        $coordenades->latitude = $request->latitude;
        $coordenades->longitude = $request->longitude;

        $direction->region = $request->region;
        $direction->subregion = $request->subRegion;
        $direction->street = $request->street;
        $direction->postalCode = $request->postalCode;

        $sucursal->directionId = $direction->id;
        $sucursal->coordenadasId = $coordenades->id;
        $sucursal->code = $request->codSucursal;
        $sucursal->name = $request->name;

        $response = "Success";


        return response()
            ->json(['response' => $response, 'statusCode' => 201])
            ->setStatusCode(201);
    }
}
