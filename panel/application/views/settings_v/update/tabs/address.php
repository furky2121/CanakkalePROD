<div role="tabpanel" class="tab-pane fade" id="tab-6">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Harita Linki</label>
            <input class="form-control" placeholder="Google Harita Linki"
                   name="haritaurl"
                   value="<?php echo isset($form_error) ? set_value("haritaurl") : $item->haritaurl; ?>">
        </div>
    </div>
    <div class="row">

        <div class="form-group col-md-12">
            <label>Adres Bilgisi</label>
            <textarea name="address" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                                        <?php echo isset($form_error) ? set_value("address") : $item->address; ?>
                                    </textarea>
        </div>

    </div>

</div><!-- .tab-pane  -->