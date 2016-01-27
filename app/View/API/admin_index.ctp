<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('API') ?></h3>
        </div>
        <div class="box-body">

          <form action="#" method="post">

            <div class="form-group">
                <label><?= $Lang->get('SKIN') ?></label>
                <div class="radio">
                  <label>
                    <input type="radio" name="skins" value="1"<?php if($config['skins'] == 1) { echo ' checked="checked"'; } ?>>
                    <?= $Lang->get('ENABLED') ?>
                  </label>
                  <br>
                  <label>
                    <input type="radio" name="skins" value="0"<?php if($config['skins'] == 0) { echo ' checked="checked"'; } ?>>
                    <?= $Lang->get('DISABLED') ?>
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label><?= $Lang->get('SKIN_FREE') ?></label>
                <div class="radio">
                  <label>
                    <input type="radio" name="skin_free" value="1"<?php if($config['skin_free'] == 1) { echo ' checked="checked"'; } ?>>
                    <?= $Lang->get('ENABLED') ?>
                  </label>
                  <br>
                  <label>
                    <input type="radio" name="skin_free" value="0"<?php if($config['skin_free'] == 0) { echo ' checked="checked"'; } ?>>
                    <?= $Lang->get('DISABLED') ?>
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label><?= $Lang->get('FILENAME') ?></label>
                <div class="input-group">
                  <div class="input-group-addon"><?= $this->Html->url('/', true) ?></div>
                  <input type="text" class="form-control" name="skin_filename" value="<?= $config['skin_filename'] ?>" placeholder="<?= $Lang->get('DEFAULT') ?> : skins/{PLAYER}">
                  <div class="input-group-addon">.png</div>
                </div>
              </div>

              <div class="form-group">
                <label><?= $Lang->get('SIZE') ?></label>
                <div class="input-group">
                  <input type="text" class="form-control" name="skin_width" value="<?= $config['skin_width'] ?>" placeholder="<?= $Lang->get('WIDTH') ?>">
                  <div class="input-group-addon">x</div>
                  <input type="text" class="form-control" name="skin_height" value="<?= $config['skin_height'] ?>" placeholder="<?= $Lang->get('HEIGHT') ?>">
                </div>
              </div>

            <div class="form-group">
              <label><?= $Lang->get('CAPE') ?></label>
              <div class="radio">
                <label>
                  <input type="radio" name="capes" value="1"<?php if($config['capes'] == 1) { echo ' checked="checked"'; } ?>>
                  <?= $Lang->get('ENABLED') ?>
                </label>
                <br>
                <label>
                  <input type="radio" name="capes" value="0"<?php if($config['capes'] == 0) { echo ' checked="checked"'; } ?>>
                  <?= $Lang->get('DISABLED') ?>
                </label>
              </div>
            </div>

            <div class="form-group">
              <label><?= $Lang->get('CAPE_FREE') ?></label>
              <div class="radio">
                <label>
                  <input type="radio" name="cape_free" value="1"<?php if($config['cape_free'] == 1) { echo ' checked="checked"'; } ?>>
                  <?= $Lang->get('ENABLED') ?>
                </label>
                <br>
                <label>
                  <input type="radio" name="cape_free" value="0"<?php if($config['cape_free'] == 0) { echo ' checked="checked"'; } ?>>
                  <?= $Lang->get('DISABLED') ?>
                </label>
              </div>
            </div>

            <div class="form-group">
              <label><?= $Lang->get('FILENAME') ?></label>
                <div class="input-group">
                  <div class="input-group-addon"><?= $this->Html->url('/', true) ?></div>
                  <input type="text" class="form-control" name="cape_filename" value="<?= $config['cape_filename'] ?>" placeholder="<?= $Lang->get('DEFAULT') ?> : capes/{PLAYER}">
                  <div class="input-group-addon">.png</div>
              </div>
            </div>

            <div class="form-group">
              <label><?= $Lang->get('SIZE') ?></label>
              <div class="input-group">
                <input type="text" class="form-control" name="cape_width" value="<?= $config['cape_width'] ?>" placeholder="<?= $Lang->get('WIDTH') ?>">
                <div class="input-group-addon">x</div>
                <input type="text" class="form-control" name="cape_height" value="<?= $config['cape_height'] ?>" placeholder="<?= $Lang->get('HEIGHT') ?>">
              </div>
            </div>

            <input type="hidden" name="data[_Token][key]" value="<?= $csrfToken ?>">

            <div class="pull-right">
              <button class="btn btn-primary" type="submit"><?= $Lang->get('SUBMIT') ?></button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
