

view all flights for you calptin <h2>{{Auth::guard('pilot')->user()->name}}</h2><br>
<hr>
@foreach ($flights as $item)
id  {{$item->id}} <br>
from   {{$item->from}}<br>
to {{$item->to}}<br><br>
plan_id {{$item->plan_id}}<br>
start_date  {{$item->start_date}}<br>
<hr>
@endforeach
