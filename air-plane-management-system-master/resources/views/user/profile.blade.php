

<style>  table, th, td {
    border:5px solid rgb(24, 144, 208);
  }
  
  </style>
 <h2>  welcome {{Auth::user()->name}}</h2> 
<br>
<br>

<h2>flights for now </h2>
<table style="width:100%">
    <tr>
        <th>plan id</th>
        <th> from</th>
        <th>to</th>
        <th>time</th>
        <th>retun time</th>
        <th>cost</th>
        <th></th>

    </tr>

@foreach ($flights as $item)

    <tr>
        <td>   {{$item->id}}          </td>
        <td>   {{$item->from}}        </td>
        <td>   {{$item->to}}          </td>
        <td>   {{$item->start_date}}  </td>
        <td>   {{$item->return_date}} </td>
        <td>   {{$item->price}}       </td>
    
    <td>
        <form action="{{url('find_fligh/'.$item->id)}}" method="get">
        <input type="submit" value="book">
        </form>
    </td>
    </tr>

@endforeach


</table>
<br>
<hr>
<br>
<h1>tickets</h1>

 <br>
<table style="width:50%">
    <tr>
        <th>      flight id    </th>
        <th>     number of seats      </th>
        <th>      total price is     </th>
    </tr>

@foreach ($rice as $item)
    <tr>
        <td>  {{$item->flight_id}}   </td>
        <td>  {{$item->seats}}       </td>
        <td>  {{$item->total}}       </td>
    </tr>
@endforeach
</table>    
  <br>
 <form action="{{url('userlogout')}}" method="post">
    @csrf
<input type="submit" value="log out"></form>



<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
