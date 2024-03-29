<div id="accordion" class="sj-addarticleholdcontent sj-collapsehold">
    <div class="sj-dashboardboxtitle" id="headingOne-site-title" data-toggle="collapse" data-target="#collapseOne-site-title"
        aria-expanded="true" aria-controls="collapseOne-site-title">
        <h2><?php echo e(trans('prs.site_title_setting')); ?></h2>
    </div>
    <div id="collapseOne-site-title" aria-labelledby="headingOne-site-title" data-parent="#accordion" class="sj-uploadimgbars sj-active collapse">
        <?php echo Form::open([ 'url' => '/dashboard/'.$user_role.'/site-management/store/site-title-settings', 'class' => 'sj-formtheme
        sj-formarticle sj-formsocical' ]); ?>

        <fieldset class="social-icons-content">
            <div class="wrap-social-icons">
                <div class="form-group">
                    <?php echo Form::text('site_title', $site_title, ['class' => 'form-control','placeholder'=>trans('prs.site_title_setting')]); ?>

                </div>
            </div>
        </fieldset>
        <div class="sj-btnarea sj-updatebtns">
            <?php echo Form::submit(trans('prs.btn_save'), ['class' => 'sj-btn sj-btnactive']); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
</div>
