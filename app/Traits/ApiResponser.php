<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Response;

trait ApiResponser
{
   /**
     * Generate Single Success Response
     *
     * @param  [array / Object] ResponseData
     * @param  [HTTP REsponseCode] StatusCode
     * @return \Illuminate\Http\JsonResponse
     */
   public function success_message($message)
   {
      return response()->json(['message' => $message, 'status' => SUCCESSFUL]);
	}

	public function success_data($data)
   {
      return response()->json(['status' => SUCCESSFUL, 'data' => $data]);
	}

	public function error_message($error)
   {
		return response()->json(['error' => $error, 'status' => ERROR]);
   }

   public function validation_error($errors)
   {
		return response()->json(['errors' => $errors, 'status' => VALIDATION_ERROR]);
   }


   /**
    *  Request Validation Errors Api-response
    *
    * @param $errors
    * @return \Illuminate\Http\JsonResponse
    * @author OsborneMordreds
    */
   public static function returnValidationError($errors)
   {
		return response()->json(['errors' => $errors, 'status' => VALIDATION_ERROR]);
   }

   public static function returnSuccessData($data)
   {
      return response()->json(['status' => SUCCESSFUL, 'data' => $data]);
   }

   public static function returnSuccessMessage($message)
   {
      return response()->json(['message' => $message, 'status' => SUCCESSFUL]);
   }

   public static function returnErrorMessage($message)
   {
      return response()->json(['message' => $message, 'status' => ERROR]);
   }

    public static function returnRawData($data)
    {
        return response()->json($data, Response::HTTP_OK);
    }

    public static function returnRawArray($data)
    {
        return $data;
    }
}
