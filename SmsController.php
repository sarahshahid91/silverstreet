<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models;

class SmsController extends BaseController
{
	//question no 2
    public function createSms(Request $request)
    {
    	$message = "";
    	$today_date = date('Y-m-d h:i:s');

    	$subject = $request->input('subject');
        $content = $request->input('content');

        $tblInfo = array(
        	'subject' => $subject,
        	'content' => $content,
        	'create_date' => $today_date
        );
        
        $new_sms = Models\Sms::create($tblInfo);

        if($new_sms->id != '')
        {
        	$message = "Succes create new sms!";
        }
        else
        {
        	$message = "Failed to create new sms!";
        }

        return response($message, 200);
    }

    //question no 3
    public function getSms($limit = 1)
    {
    	$returnData = array();

    	$list = Models\Sms::getListSms($limit);

    	$returnData['list'] = $list;

    	return response($returnData, 200);
    }

    //question no 4
    public function getTotalNumberSms()
    {
    	$returnData = array();

    	$total = Models\Sms::get()->count();

    	$returnData['total'] = $total;

    	return response($returnData, 200);
    }

    //question no 5
    public function getListOfSms()
    {
    	$returnData = array();

    	$list_data = Models\Sms::orderBy('id', 'desc')->get();

    	$returnData['list'] = $list_data;

    	return response($returnData, 200);
    }
}
