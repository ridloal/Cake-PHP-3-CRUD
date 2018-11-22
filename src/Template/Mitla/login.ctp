<div class="container" style="margin-top: 100px;">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading" align="center">Log in</div>
        <div class="panel-body">

          <?php 
            echo $this->Form->create(null, [
                'url' => ['controller' => 'Mitla', 'action' => 'login'],
                'data-toggle' => 'validator'
            ]);
          ?>
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Login ID" name="id" id="flogin" type="" autofocus="" required minlength="8" maxlength="16" pattern="^[-._A-z0-9]{1,}$" value="<?php echo $id; ?>">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" id="fpassword" type="password" required minlength="8" maxlength="16" value="<?php echo $password; ?>">
                <div class="help-block with-errors"></div>
              </div>
              <button type="submit" class="btn btn-primary form-control">Login</button>
            </fieldset>
          </form>



        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center" style="background-color: black; color: white;">Login Message</h4>
            </div>
            <div class="modal-body">
              <p align="center">Invalid login ID / Password</p>
            </div>
            <div class="modal-footer">
                <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
            </div>
        </div>

    </div>
</div>

<?php if ($id!=null): ?>
  <script type="text/javascript">
       $(window).load(function(){
           $('#myModal').modal('show');
        });
  </script> 
<?php
endif ?>