<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\MessageReply;

class MessageController extends Controller
{
    // // public function index()
    // {

    //     $messages = Message::all();


    //     return view('messages.index', compact('messages'));
    // }

    // public function create()
    // {  return view('messages.create');


    // }

    public function store(Request $request)
    {
        $message = new Message();
        $message->user_id = $request->user_id;
        $message->message_body = $request->message_body;
        $message->save();

        // return redirect('/dashboard')->with('success','Message Created Successfully');
        return response()->json([
            'message' => 'Message Created Successfully',
            'data' => $message
        ]);
    }

    public function retrieveMessages()
    {
        $messages = Message::all();
        return response()->json([
            'message' => 'Messages retrieved successfully',
            'data' => $messages
        ]);
    }

    public function edit($id)
    {
        $message = Message::find($id);
        return view('messages.edit', compact('message'));
    }

    public function reply(Request $request, $id)
    {
        $messageReply = new MessageReply();
        $messageReply->message_id = $id;
        $messageReply->reply_body = $request->messageReply;
        $messageReply->save();

        return redirect('/')->with('message', 'Reply sent successfully');
    }


}
