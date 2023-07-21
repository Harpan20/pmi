<section id="moduleStok">
    <div class="card">
        <div class="card-body">

            <form id="form-moduleStok" enctype="multipart/form-data">

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
                            <label required>Stok</label>
                            <textarea name="stok" data-height="350" class="tinymce-init stok-stok"><?php echo (isset($data->stok)) ? $data->stok : '' ?></textarea>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</section>