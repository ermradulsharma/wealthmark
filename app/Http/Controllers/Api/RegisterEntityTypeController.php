<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\EntityBaseController as EntityBaseController;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Models\EntityDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Stevebauman\Location\Facades\Location;


class RegisterEntityTypeController extends EntityBaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'entity_name' => 'required|max:199|unique:entity_details',
            'entity_status' => 'required',

        ]);

        // print_r($request->all());
        //  dd($request->all());

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->toArray());
        }

        // $input = $request->all();
        //  print_r($input);
        //  die;
        //  $entity_type_details = Entity_details::create($input);
        $entity_type_details = new EntityDetail;

        $entity_type_details->entity_name = $request->entity_name;
        $entity_type_details->entity_status = $request->entity_status;
        $entity_type_details->comments = $request->comments;


        $entity_type_details->save();


        // print_r($entity_type_details->entity_name);
        // print_r($entity_type_details->entity_status);


        $entity['entity_name'] =  $entity_type_details->entity_name;
        $entity['entity_status'] =  $entity_type_details->entity_status;
        // $token = $entity_type_details->createToken('MyApp')->plainTextToken;

        return $this->sendResponse($entity, 'Entity register successfully.');
    }

    public function show()
    {
        print_r("show list");
        $entities = EntityDetail::all();
        // dd($entities);

        // return $this->sendResponse($entity, 'Entity listed successfully.');
        return response()->json($entities);
    }

    public function delete(Request $request, $id)
    {


        //   print_r($id);
        $entity = EntityDetail::find($id)->delete();
        if (!empty($entity)) {
            return $this->sendResponse($entity, 'Entity deleted successfully.');
        } else {
            return $this->sendResponse(null, 'No Entity found.');
        }
    }
}
