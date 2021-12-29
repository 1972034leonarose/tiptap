<section class="container-login">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card p-3">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center" style="font-weight:600;">Create Account</h2>
                        <p class="text-center">Already have an account? <span style="color: #d3455b; font-weight:500"><a href="">Login here</a></span></p>
                    </div>
                </div>
                <form onsubmit="event.preventDefault()" class="form-card">
                    <div class="form-group pt-3">
                        <label for="fullname">Full name</label>
                        <input type="text" class="form-control" id="txtName" aria-describedby="name" placeholder="Full name">
                    </div>

                    <div class="form-group pt-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="txtEmail" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <div class="form-group pt-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="txtPwd" placeholder="Password">
                    </div>
                    <div class="btn-area pt-3">
                        <button type="submit" class="btn btn-darkpink">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>