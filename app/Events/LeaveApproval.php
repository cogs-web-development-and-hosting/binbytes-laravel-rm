<?php

namespace App\Events;

use App\Leave;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class LeaveApproval
{
    use Dispatchable, SerializesModels;

    /**
     * @var Leave
     */
    public $leave;

    /**
     * Create a new event instance.
     *
     * @param Leave $leave
     */
    public function __construct(Leave $leave)
    {
        $this->leave = $leave;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('leave-approval');
    }
}
