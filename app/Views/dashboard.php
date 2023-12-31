<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-4">

                <div class="card" style="border-radius: 15px;">
                    <div class="card-body text-center">
                        <div class="mt-3 mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp" class="rounded-circle img-fluid" style="width: 100px;" />
                        </div>
                        <h4 class="mb-2">Somen Banerjee</h4>
                        <p class="text-muted mb-4">somen@Programmer.com</p>
                        <div class="mb-4 pb-2">
                            <button type="button" class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-twitter fa-lg"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-skype fa-lg"></i>
                            </button>
                        </div>
                        <button type="button" class="btn btn-danger btn-rounded btn-lg">
                            Logout
                        </button>

                        <p class="pt-4 mb-0">By Somen Banerjee</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>