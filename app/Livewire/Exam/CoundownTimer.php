<?php

namespace App\Livewire\Exam;

use Livewire\Component;

class CoundownTimer extends Component
{
    public $minutes = 10, $seconds = 0;
    protected $listeners = ['updateTimer'];

    public function updateTimer()
    {
        if ($this->minutes > 0 || $this->seconds > 0) {
            if ($this->seconds == 0) {
                $this->minutes--;
                $this->seconds = 59;
            } else {
                $this->seconds--;
            }
        }
    }

    public function render()
    {
        return view('livewire.exam.coundown-timer');
    }
}
