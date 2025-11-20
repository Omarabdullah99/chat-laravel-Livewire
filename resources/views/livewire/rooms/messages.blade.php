  <div class="h-96 overflow-y-scroll border rounded-lg px-4 py-3">
      <ul class="flex sm:[overflow-anchor:none] flex-col-reverse space-y-4 space-y-reverse" role="list">
          @for ($i = 0; $i <= 5; $i++)
              @livewire('rooms.message')
          @endfor
      </ul>
  </div>
