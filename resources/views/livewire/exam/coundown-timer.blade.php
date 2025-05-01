<div class="text-center">

    @if($minutes > 0 || $seconds > 0)
        <h2 @if($minutes < 1)class="text-danger fw-bolder"@endif>Time Remaining: <span>{{ sprintf("%02d:%02d", $minutes, $seconds) }}</span> Minutes</h2>
        <div wire:poll.1s="updateTimer"></div>
    @else
        <h2 class="text-danger fw-bolder">Time’s up!</h2>
    @endif
</div>