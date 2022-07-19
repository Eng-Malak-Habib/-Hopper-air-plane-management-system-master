<form action="{{url('adminregisteration')}}" method="post">
@csrf
    <input type="name" name="name" ><br>
    <input type="email" name="email" ><br>
    <input type="password" name="password" ><br>
    <input type="number" name="number" ><br>
    <input type="submit" value="register">
    </form>