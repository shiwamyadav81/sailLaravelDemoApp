<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\On;

class RealtimeMessage extends Component
{
    use LivewireAlert;

    #[On('echo:my-channel,RealtimeMessageEvent')]
    public function handleRealtimeMessage(): void
    {
        $this->alert('success', 'Realtime Message', [
            'timer' => 20000,
            'toast' => true,
            'text' => 'Realtime Message',
        ]);
    }
    public function render()
    {
        return view('livewire.realtime-message');
    }
}
