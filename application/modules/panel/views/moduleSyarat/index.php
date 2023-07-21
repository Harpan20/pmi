<section id="moduleSyarat">
    <div class="card">
        <div class="card-body">

            <form id="form-moduleSyarat" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-xs-10 col-md-10">
                        <h4 class="card-title"><?php echo (isset($card_title)) ? $card_title : '' ?></h4>
                        <h6 class="card-subtitle"><?php echo (isset($card_subTitle)) ? $card_subTitle : '' ?></h6>
                        <div class="clear-card"></div>
                    </div>
                    <div class="col-xs-10 col-sm-2">
                        <button class="btn btn--raised btn-primary btn--icon-text btn-block page-action-save spinner-action-button">
                            Save Changes
                            <div class="spinner-action"></div>
                        </button>
                        <div class="clear-card"></div>
                    </div>
                </div>
                <div class="clear-card"></div>

                <div class="row">
                    <div class="col-xs-10 col-md-12">
                        <div class="form-group">
                            <label required>Syarat</label>
                            <textarea name="syarat" data-height="350" class="tinymce-init syarat-syarat"><?php echo (isset($data->syarat)) ? $data->syarat : '' ?></textarea>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</section>