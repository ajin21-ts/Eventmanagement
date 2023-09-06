<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section id="head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h1>Login</h1></center>
                    <form action="">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="name"name="name"placeholder>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="email"name="email"placeholder>
                        </div>
                        <div class="form-group">
                            <label>Passsword</label>
                            <input type="text" pattern="\d" maxlength="5" class="pwd"name="pwd"placeholder>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    
</body>
</html>