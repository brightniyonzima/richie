<html>
<h3>Movie results</h3>
<table>
@if($specifurl)
 @if(count($movies_array and $config_array))

   @foreach($movies_array['results'] as $movie)
      <tr>
      <td>
      <img src="
          {{$image=$config_array['images']['base_url'].
            $image=$config_array['images']['poster_sizes'][2].
            $movie['poster_path']}}
          "></td>
      <td><label><b>Id:</b></label>{{ $movie['id'] }}</td>
      <td><label><b>Original title:</b></label>{{ $movie['original_title'] }}</td>
      <td><label><b>Title:</b></label>{{ $movie['title'] }}</td>
      <td><a href={{$specifurl}}{{$movie['id']}}-{{$movie['original_title']}}>view</a></td>
      </tr>
   @endforeach

 @endif
@endif
</table>
</html>