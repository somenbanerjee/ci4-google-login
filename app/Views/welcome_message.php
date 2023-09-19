<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Sign Up</title>
</head>

<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-center pb-4">CI4 Google Login</h3>

                <form action="#">
                    <div class="row shadow-lg p-5 pb-3">
                        <fieldset class="form-group col-lg-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" autofocus />
                                <label for="email">Email</label>
                            </div>
                        </fieldset>

                        <fieldset class="form-group col-lg-12">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                <label for="password">Password</label>
                            </div>
                        </fieldset>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">
                                Login
                            </button>
                        </div>

                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <div class="d-grid mb-4">
                            <a href="#" class="btn btn-danger btn-lg" asp-page-handler="Register" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"></path>
                                </svg>
                                Sign in with Google
                            </a>
                        </div>

                        <!-- Not Registered -->
                        <div class="text-center w-100 mt-4">
                            <p class="text-muted font-weight-bold">
                                By Somen Banerjee
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>