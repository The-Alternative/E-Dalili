<?php

namespace App\Traits;

trait GeneralTrait
{

    public function returnError($stateNum, $msg)
    {
        return response()->json([
            'status' => false,
            'stateNum' => $errNum,
            'msg' => $msg
        ]);
    }


    public function returnSuccessMessage($msg, $stateNum )
    {
        return [
            'status' => true,
            'stateNum' => $stateNum,
            'msg' => $msg
        ];
    }

    public function returnData( $key,$value, $msg)
    {
        return response()->json([
            'status' => true,
            'stateNum' => '201',
            'msg' => $msg,
            $key => $value
        ]);
    }

}