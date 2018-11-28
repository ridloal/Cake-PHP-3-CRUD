
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
  <div class="row">
    <div class="col-md-12">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Edit Data Film</div>
        <div class="panel-body">
          
          <?php 
            echo $this->Form->create(null, [
                'url' => ['controller' => 'Latihan', 'action' => 'crudUpdate/'.$film['film_id']],
                'data-toggle' => 'validator'
            ]);
          ?>
            <fieldset>
              <table class="table">
                <tbody>
                  <tr>
                    <td>Judul Film</td>
                    <td><input type="text" name="judul" class="form-control" placeholder="Judul Film" value="<?=$film['nama'];?>"></td>
                  </tr>
                  <tr>
                    <td>Genre Film</td>
                    <td>
                        <?php foreach ($genre as $dt): ?>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="labelid[]" 
                              <?php foreach ($genre_aktif as $d){ 
                                if ($d['label_id'] == $dt['label_id']){ 
                                echo "checked";
                                } 
                              } ?>
                            value="<?=$dt['label_id']?>"> <?=$dt['nama']?> <br>
                          </label>
                        </div>
                        <?php endforeach ?>

                    </td>
                  </tr>
                </tbody>
              </table>
              <div align="right">
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
            </fieldset>
          </form>

        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
</div>

