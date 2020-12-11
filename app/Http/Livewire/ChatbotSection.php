<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Illuminate\Support\Carbon;
use Livewire\Component;

class ChatbotSection extends Component
{
    public $section;
    public $my_message;
    public $messages;

    protected $listeners = ['set_secondary_menu_visibility' => '$refresh'];

    public function mount()
    {
        $this->section = Chat::where('id_user', auth()->user()->id)->count() <= 0 ? 'new-user' : 'chat-section';
        $this->messages = Chat::where('id_user', auth()->user()->id)->count() <= 0 ? [] : $this->update_messages();
    }

    public function render()
    {
        return view('livewire.chatbot-section');
    }

    public function start_consultation()
    {
        $this->section = 'chat-section';

        if (Chat::where('id_user', auth()->user()->id)->count() <= 0) {
            $this->messages[] = [
                'id_user' => auth()->user()->id,
                'details' => [
                    'sender' => 'bot',
                    'message' => "Welcome to Medical Chatbot, " . auth()->user()->name . ". How can we help you today?",
                ],
            ];

            Chat::create($this->messages[0]);
        }
    }

    public function send_message()
    {
        if (trim($this->my_message) != "") {
            $id_user = auth()->user()->id;
            $data_message = [
                'id_user' => $id_user,
                'details' => [
                    'sender' => 'me',
                    'message' => $this->my_message,
                ],
            ];

            Chat::create($data_message);

            $this->messages = $this->update_messages();

            $this->emit('update_scroll');
            $this->my_message = "";

            if (strpos($data_message['details']['message'], 'time') || $data_message['details']['message'] == "time") {
                $data_message = [
                    'id_user' => $id_user,
                    'details' => [
                        'sender' => 'bot',
                        'message' => "It's " . Carbon::now()->format('H:m.') . ' ',
                    ],
                ];
                Chat::create($data_message);

                $this->messages = $this->update_messages();
            }

            $this->emit('update_scroll');
        }
    }

    public function update_messages()
    {
        $messages = Chat::where('id_user', auth()->user()->id)
            ->get()
            ->groupBy(function ($item) {
                return $item->created_at->format('d F Y');
            })
            ->toArray();
        return $messages;
    }
}
