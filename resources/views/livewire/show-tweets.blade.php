

   <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
      {{-- <div>
         <x-jet-application-logo class="block h-12 w-auto" />
      </div> --}}

      <div class="grid grid-rows-4 grid-flow-col gap-4">
         <a href="#" class="bg-teal-800" wire:click.prevent="showModal">
            <small>Instruções</small>
         </a>
         <div>01</div>
         <div>02</div>
         <div>03</div>
         <div>04</div>
         <div>05</div>
         <div>06</div>
         <div>07</div>
       </div>
      
      <div>
   </div>

<div>
   Show Tweets
   <h1>{{$message}}</h1>
   <form method="post" wire:submit.prevent="create">
      <input type="text" name="message" id="message" wire:model="message">
         <button type="submit">Criar Tweet</button>
   </form>
   <hr>  
   <ul>
   @foreach ($tweets as $tweet)
   
      <li>
         <strong>{{ $tweet->user->name }}</strong> - {{ $tweet->content }}
      </li>
   
   @endforeach
</ul>
</div>

</div>
