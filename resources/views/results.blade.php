<html>
<h3>Movie results</h3>
@if($specifurl)
 @if(count($movies_array and $config_array))

  <ul>
   @foreach($movies_array['results'] as $movie)

      <li><label><b>Id:</b></label>{{ $movie['id'] }}&nbsp;
         <label><b>Original title:</b></label>{{ $movie['original_title'] }}
         <label><b>Title:</b></label>{{ $movie['title'] }}
         <a href={{$specifurl}}{{$movie['id']}}-{{$movie['original_title']}}>view</a>

         @foreach($config_array['images'] as $image)

         @endforeach

      </li>

   @endforeach
  </ul>

 @endif
@endif
</html>