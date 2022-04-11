<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;

class SendemailController extends Controller
{
    public function sendEmailBulk(Request $request)
    {
        $details = [
    		'subject' => 'Test Notification'
    	];
    	
        $job = (new \App\Jobs\SendEmailBulkJob($details))
            	->delay(now()->addSeconds(2)); 

        dispatch($job);
        echo "Mail send successfully !!";
    }
}
