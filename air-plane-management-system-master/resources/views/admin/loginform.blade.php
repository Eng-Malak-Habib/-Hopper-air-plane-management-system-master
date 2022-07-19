<form action="{{url('adminlogin')}}" method="post">
@csrf
<input type="email" name="email"  >
<input type="password" name="password"  >
<input type="submit" value="register">

</form>