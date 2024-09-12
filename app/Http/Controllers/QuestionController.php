<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class QuestionController extends Controller
{
    public function showForm(){
        return view("form");
    }

    public function submitForm(Request $request){
        $message = $request->input("message");
        $yourApiKey = getenv('OPENAI_API_KEY');
        $client = OpenAI::client($yourApiKey);

        $result = $client->chat()->create([
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'user', 'content' => $message ],
            ],
        ]);

        $message = $result->choices[0]->message->content; // Hello! How can I assist you today?

        return view("result", compact("message"));
    }

}
