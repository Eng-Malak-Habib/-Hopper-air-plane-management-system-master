{{Auth::guard('admin')->user()->name}}
add plane
<br>
<hr>
<form action="{{url('addpilot')}}" method="post">
    @csrf
    <input type="name" name="name" ><br>
    <input type="email" name="email" ><br>
    <input type="password" name="password" ><br>
    <input type="number" name="number" ><br>
    <input type="number" name="active" ><br>

    
    <input type="submit" value="register">

</form>
<br>
add plane
<hr>

    <form action="{{url('addplane')}}" method="post"><br>
        @csrf
    name:    <input type="name" name="name"  ><br>
    
    capacity:      <input type="number" name="capacity"><br>
    <input type="submit" value="register">

        </form>
        
        
        <br>
        <hr>

        add flight
<br>
        <form action="{{url('addflight')}}" method="post"><br>
            @csrf
            <input type="text" name="title" ><br>
            <input type="text" name="from" ><br>
            <input type="text" name="to" ><br>
            <input type="date" name="start_date" ><br>
            <input type="date" name="return_date" >
            <br>
            <select Name="plan_id" Size="Number_of_options">  
                @foreach ($plane as $item)
                <option> {{$item->id}}</option>
                @endforeach
            </select> 
                <br>
            <select Name="pilot_id" Size="Number_of_options">  
                @foreach ($pilot as $items)
                <option> {{$items->id}}</option>
                @endforeach
                </select>  <br>
            <input type="number" name="price" ><br>
            <input type="submit" value="register">

        </form><br>

<hr>
view all flights
@foreach ($flights as $item)
    {{$item->id}}
    {{$item->from}}
@endforeach
show all flights here