
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
  <div class="row">
    <div class="col-md-12">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Cread Read Update Delete</div>
        <div class="panel-body">
          
          <?php 
          echo $this->Html->link(
              'Tambah',
              '/latihan/crudCreate/',
              ['class' => 'btn btn-sm btn-success']
          );
          ?>

          <hr>

          <table id="datatable1" class="table table-stripped table-bordered">
              <thead>
                <th>No</th>
                <th>Kode Film</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($film_all as $d): ?>
                  <tr>
                    <td><?=$no++;?></td>  
                    <td><?="XXX-".$d['film_id']?></td>  
                    <td><?=$d['nama_film']?></td>  
                    <td><?=$d['nama_label']?></td>  
                    <td>
                      <?php 
                      echo $this->Html->link(
                          'Edit',
                          '/latihan/crudEdit/'.$d['film_id'],
                          ['class' => 'btn btn-sm btn-primary']
                      );
                      ?>
                      <?php 
                      echo $this->Html->link(
                          'Delete',
                          '/latihan/crudDelete/'.$d['film_id'],
                          ['class' => 'btn btn-sm btn-danger',
                            'onclick' => "return confirm('Are you sure to Delete this data?')"]
                      );
                      ?>
                    </td>  
                  </tr>
                <?php endforeach ?>

              </tbody>
            </table>

        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
</div>

<script>
  $(document).ready( function () {
      $('#datatable1').DataTable({
        "searching": true,
        "lengthChange": false,
        "pageLength": 10,
        "decimal":        "",
        "emptyTable":     "Tidak Ada Data",
        "info":           "",
        "infoEmpty":      "Tidak Ada Data",
        "infoFiltered":   "",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "",
        "loadingRecords": "Loading...",
        "processing":     "Processing...",
        "search":         "",
        "zeroRecords":    "Tidak Ada Data Yang Sesuai",
        "paginate": {
            "first":      "First",
            "last":       "Last",
            "next":       "Next",
            "previous":   "Previous"
            },
      });
  } );
</script>