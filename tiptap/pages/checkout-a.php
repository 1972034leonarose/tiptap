<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Standard CSS -->
    <link href="../assets/css/style-index.css" rel="stylesheet" />
</head>

<body>
    <section class="checkout-container">
        <div class="checkout-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <!-- left -->
                        <div class="card-left">
                            <!-- TODO: shrsnya ga ada -->
                            <h3 style="font-weight:600;"><br>Customer Info<br></h3>

                            <form class="form-card">
                                <div class="form-group pt-1">
                                    <label for="txtName">Full Name</label>
                                    <!-- get value via php -->
                                    <input type="text" class="form-control" id="idName">
                                </div>

                                <div class="form-group pt-1">
                                    <label for="txtEmail">Email</label>
                                    <!-- get value via php -->
                                    <input type="email" class="form-control" id="idEmail">
                                </div>

                                <div class="form-group pt-1">
                                    <label for="txtPhone">Phone</label>
                                    <!-- get value via php -->
                                    <input type="text" class="form-control" id="idPhone">
                                </div>

                                <div class="form-group pt-3">
                                    <label for="txtPhone">Phone</label>
                                    <!-- get value via php -->
                                    <input type="text" class="form-control" id="idPhone">
                                </div>

                                <div class="form-group pt-1">
                                    <label for="txtAddress">Address</label>
                                    <!-- get value via php -->
                                    <textarea name="txtAddress" id="addressId" rows="5" cols="20" class="form-control" maxLength=100></textarea>
                                </div>

                                <div class="btn-area pt-1">
                                    <button type="submit" class="btn btn-darkpink">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- right -->
                        <div class="card-right">
                            <h3 style="font-weight:600;"><br>Order Summary<br></h3>
                            <!-- gambar storage size -->
                            <div class="col-4 justify-content-center"><img class="img-fluid" src="https://i.imgur.com/79M6pU0.png"></div>

                            <div class="row upper">
                                <div class="col text-left"><b>Storage Size: </b></div>
                                <div class="col text-right text-muted">Medium</div>
                            </div>
                            <div class="row upper">
                                <div class="col text-left"><b>Start Date of Storage: </b></div>
                                <div class="col text-right text-muted">Medium</div>
                            </div>
                            <div class="row upper">
                                <div class="col text-left"><b>End Date of Storage: </b></div>
                                <div class="col text-right text-muted">Medium</div>
                            </div>

                            <hr>
                            <div class="row lower">
                                <div class="col text-left">Subtotal</div>
                                <div class="col text-right">$ 46.98</div>
                            </div>
                            <div class="row lower">
                                <div class="col text-left">Delivery</div>
                                <div class="col text-right">Free</div>
                            </div>
                            <div class="row lower">
                                <div class="col text-left"><b>Total to pay</b></div>
                                <div class="col text-right"><b>$ 46.98</b></div>
                            </div>
                            <!-- <div class="row lower">
                                <div class="col text-left"><a href="#"><u>Add promo code</u></a></div>
                            </div> <button class="btn">Place order</button>
                            <p class="text-muted text-center">Complimentary Shipping & Returns</p> -->
                        </div>
                    </div>
                </div>
    </section>
</body>

</html>