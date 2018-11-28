
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Search Film</div>
        <div class="panel-body">
          <?php 
            echo $this->Form->create(null, [
                'url' => ['controller' => 'Mitla', 'action' => 'searchFilm'],
                'data-toggle' => 'validator'
            ]);
          ?>
            <fieldset>
              <table class="table">
                <tbody>
                  <tr>
                    <td>Pencarian Film</td>
                    <td><input type="text" name="searchkey" class="form-control" placeholder="Judul Film"></td>
                  </tr>
                  <tr>
                    <td>Pilih Berdasarkan Genre</td>
                    <td>

                        <div class="checkbox">
                          <label>
                            <?php foreach ($genre as $dt): ?>
                              <input type="checkbox" name="labelid[]" value="<?=$dt['label_id']?>"> <?=$dt['nama']?> <br>
                            <?php endforeach ?>
                          </label>
                        </div>

                    </td>
                  </tr>
                </tbody>
              </table>
              <div align="right">
                <button type="submit" class="btn btn-primary">Cari</button>
                <button type="reset" class="btn btn-primary">Hapus Filter</button>
              </div>
            </fieldset>
          </form>

          <hr>

          <?php if ($hasil!=null): ?>
            
            <table id="datatable1" class="table table-stripped table-bordered">
              <thead>
                <th>No</th>
                <th>ID Film</th>
                <th>Judul</th>
                <th>Genre</th>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($hasil as $d): ?>
                  <tr>
                    <td><?=$no++;?></td>  
                    <td><?=$d['film_id']?></td>  
                    <td><?=$d['nama_film']?></td>  
                    <td><?=$d['nama_label']?></td>  
                  </tr>
                <?php endforeach ?>

              </tbody>
            </table>

          <?php endif ?>
          
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
</div>

<script>
  $(document).ready( function () {
      $('#datatable1').DataTable({
        "searching": false,
        "lengthChange": false,
        "pageLength": 2,
        "decimal":        "",
        "emptyTable":     "No data available in table",
        "info":           "",
        "infoEmpty":      "",
        "infoFiltered":   "",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "",
        "loadingRecords": "Loading...",
        "processing":     "Processing...",
        "search":         "",
        "zeroRecords":    "No matching records found",
        "paginate": {
            "first":      "First",
            "last":       "Last",
            "next":       "Next",
            "previous":   "Previous"
            },
      });
  } );
</script>