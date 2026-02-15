<!-- Modal -->
<div class="modal fade" id="signupmodel" tabindex="-1" aria-labelledby="signupmodelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signupmodelLabel">Sign up for Idiscuss</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/forum/assest/_handleSignup.php" method="POST">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            aria-describedby="usernameHelp" required>
                        <div id="usernameHelp" class="form-text">Choose a username for your profile</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signinEmail" name="signinemail"
                            aria-describedby="emailHelp">
                        <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
               
            </form>
        </div>
    </div>
</div>