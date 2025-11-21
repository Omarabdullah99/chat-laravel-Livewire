<li>
    @if($message->isOwn())
    @livewire('rooms.own-message', ['message' => $message], key('own-'.$message->id))
    @else
    @livewire('rooms.others-message', ['message' => $message], key('other-'.$message->id))
    @endif
</li>
