<div>
   Show Tweets
   <h1>{{$message}}</h1>
   <input type="text" name="message" id="message" wire:model="message">
   <hr>  
   <ul>
   @foreach ($tweets as $tweet)
   
      <li>
         <strong>{{ $tweet->user->name }}</strong> - {{ $tweet->content }}
      </li>
   
   @endforeach
</ul>
</div>
