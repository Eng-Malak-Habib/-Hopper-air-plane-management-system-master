<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('lab/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('lab/css/style.css')}}">
</head>
<body>
    <div id="content" class="row gx-0">
        <div class="col-lg-3 col-md-4 col-12 page__welcome">
            <div class="px-2 d-flex align-items-center h-50 justify-content-around">
                <div class="text-center">
                    <img src="{{asset('lab/image/logo icon.png')}}" alt="logo"/>
                    <h5 class="mt-3">Lung Cancer Detection System</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12 d-flex align-items-center page__content">
            <div class="col-12 col-md-6 px-2 offset-md-3 text-center">
                <h1 class="mb-5 fw-bold"> WELCOME for new admin </h1>
                <h5 class="mb-4" >   </h5>
                <h5 class="mb-4">Please, be careful</h5>
                <form action="{{url('userregisteration')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group input-group-lg flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="name" placeholder="name" aria-label="name"  aria-describedby="addon-wrapping">
                            </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-lg flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                            <input type="email"  name="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-lg flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                            <input type="number"  name="number" class="form-control" placeholder="number" aria-label="number" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-lg flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                            <input type="password"  name="password" class="form-control" placeholder="password" aria-label="Password" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-blue w-100">sign up</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('lab/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

\