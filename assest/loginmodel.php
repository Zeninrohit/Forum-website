<!-- Modal -->
<div class="modal fade" id="loginmodel" tabindex="-1" aria-labelledby="loginmodelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginmodelLabel">Login for Idiscuss</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/forum/assest/_handlelogin.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="emaillogin" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emaillogin" name="emaillogin"
                            aria-describedby="emailHelp">
                        <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginpassword" name="loginpassword">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>



                </div>
                
            </form>
        </div>
    </div>
</div>