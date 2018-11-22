<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Main Menu</div>
        <div class="panel-body">
            <hr>
            <?php 
            echo $this->Html->link(
                'Login',
                '/login',
                ['class' => 'btn btn-primary form-control']
            );
            ?>
            <hr>
            <?php 
            echo $this->Html->link(
                'User Settings',
                '/user_settings',
                ['class' => 'btn btn-primary form-control']
            );
            ?>                      
            <hr>
            <?php 
            echo $this->Html->link(
                'Search Film',
                '/search_film',
                ['class' => 'btn btn-primary form-control']
            );
            ?>
            <hr>            
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
</div>