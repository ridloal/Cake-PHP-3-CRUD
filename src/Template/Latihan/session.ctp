
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Session Manager</div>
        <div class="panel-body">
          <?php 
            echo $this->Form->create(null, [
                'url' => ['controller' => 'Latihan', 'action' => 'session']
            ]);
          ?>
            <fieldset>
              <table class="table">
                <tbody>
                  <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required class="form-control" placeholder="Nama"></td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required class="form-control" placeholder="Username"></td>
                  </tr>
                </tbody>
              </table>
              <div align="right">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </fieldset>
          </form>

          <hr>
          <h3 align="center">Data Session</h3>
          <table class="table">
            <tbody>
              <tr>
                <th>Session Nama</th>
                <td>
                  <?php if ($this->request->session()->check('nama')): 
                    echo $this->request->session()->read('nama');
                  else:
                    echo "No Session is Set";
                  endif ?>
                </td>
              </tr>
              <tr>
                <th>Session Username</th>
                <td>
                  <?php if ($this->request->session()->check('username')): 
                    echo $this->request->session()->read('username');
                  else:
                    echo "No Session is Set";
                  endif ?>
                </td>
              </tr>
            </tbody>
          </table>
          <div align="right">
            <?php 
            echo $this->Html->link(
                'Destroy Session',
                '/latihan/sessionDestroy',
                ['class' => 'btn btn-danger']
            );
            ?>
          </div>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
</div>

