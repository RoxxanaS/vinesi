<!DOCTYPE html>
<html>

<body>


<div class="container-fluid">
    <div class="row mh-100vh">
        <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0"
             id="login-block">
            <div class="m-auto w-lg-75 w-xl-50">
                <h2 class="text-info font-weight-light mb-5"><i class="fa fa-ravelry"></i>&nbsp;Vinesi</h2>
                <form action="register.php" href="" method="post">
                    <div class="form-group"><label class="text-secondary">Name</label><input class="form-control"
                                                                                             name="name" type="text"
                                                                                             required=""></div>
                    <div class="form-group"><label class="text-secondary">Email</label><input class="form-control"
                                                                                              name="email"
                                                                                              type="text"
                                                                                              required=""
                                                                                              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$"
                                                                                              inputmode="email">
                    </div>
                    <div class="form-group"><label class="text-secondary">Password</label><input
                                class="form-control" name="password" type="password" required=""></div>
                    <div class="form-group"><label class="text-secondary">Confirm Password</label><input
                                class="form-control" name="password2" type="password" required=""></div>
                    <button class="btn btn-info mt-2" type="submit">Register</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6 d-flex align-items-end" id="bg-block"
             style="background-image: url(&quot;assets/img/image_20170210_195645_4289.jpg&quot;);background-size: cover;background-position: center center;">
            <p class="ml-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a
                        href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText"
                        target="_blank" class="text-dark"><em>Aldain Austria</em></a><br></p>
        </div>
    </div>
</div>
</body>

</html>

