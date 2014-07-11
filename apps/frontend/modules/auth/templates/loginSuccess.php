<div class="container">
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="span5">
                    <!--<div class="modal-header">-->
                    <div class="logoLockOpen">
                        <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
                        <h1 class="text-center" style="margin-left: 100%;">Authentification</h1>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo url_for('auth/login') ?>" method="post" class="form-signin">
                            <div class="form-group">
                                <?php echo $form['login']->renderError() ?>
                                <?php echo $form['login'] ?>
                            </div>
                            <div class="form-group">
                                <?php echo $form['password']->renderError() ?>
                                <?php echo $form['password'] ?>
                            </div>
                            <div class="form-group" >
                                <button style="width: 50%;margin: auto;padding: auto; " class="btn btn-primary btn-lg btn-block">VALIDER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>