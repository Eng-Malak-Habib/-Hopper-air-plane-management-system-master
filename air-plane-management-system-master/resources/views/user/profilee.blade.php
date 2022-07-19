welcome {{Auth::user()->name}}
@foreach ($rice as $item)
{{$item->id}}
{{$item->flight_id}}

@endforeach