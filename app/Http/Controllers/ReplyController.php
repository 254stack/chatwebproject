<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reply;

class ReplyController extends Controller
{
    public function reply($id)
    {
        $reply = new Reply();
            
        $message = Message::findOrFail($id);


        return response()->json(['message' => 'Reply sent successfully']);
        'data' => $reply->sendMessage($message, request('text'))
    }
} 

