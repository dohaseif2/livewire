<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@livewireStyles
</head>
<body>


    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="header-card">
                    <h2>Products Card</h2>

                </div>
                <div class="body-card">
                    @livewire('products')
                </div>
            </div>
        </div>

    </div>


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    windows.livewire.on('userStore',()=>{
        $('exampleModal').modal('hide');
    })
</script>
</body>
</html>