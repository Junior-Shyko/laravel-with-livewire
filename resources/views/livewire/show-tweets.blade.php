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
