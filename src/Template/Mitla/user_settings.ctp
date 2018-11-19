<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">User Basic Information</div>
        <div class="panel-body">
          <form action="act.php?code=user_settings" method="POST" data-toggle="validator" role="form">
            <fieldset>
              <table class="table">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <td>
                      <div class="form-group">
                        <input class="form-control" placeholder="First Name" name="first_name" type="text" autofocus="" required minlength="3" maxlength="20" pattern="^[a-zA-Z0-9 !#$%&'()*+,-./:;<=>?@[\]^_`{|}~　！”＃＄％＆’（）＊＋，－．／：；＜＝＞？＠［￥］＾＿‘｛｜｝￣、。・゛゜´｀¨ヽヾゝゞ〃仝々〆〇ー―‐＼～〜∥…‥“〔〕〈〉《》「」『』【】±×÷≠≦≧∞∴♂♀°′″℃￠￡§☆★○●◎◇◇◆□■△▲▽▼※〒→←↑↓〓０-９Ａ-Ｚａ-ｚぁ-んァ-ヶΑ-Ωα-ωА-Яа-я \u2570-\u25ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff \uFF61\uFF62\uFF63\uFF64\uFF70\uFF9E\uFF9F\uFF65\uFF66-\uFF6F\uFF71-\uFF9D]{1,}$" value="">
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input class="form-control" placeholder="Last Name" name="last_name" type="text" autofocus="" required minlength="3" maxlength="20" pattern="^[a-zA-Z0-9 !#$%&'()*+,-./:;<=>?@[\]^_`{|}~　！”＃＄％＆’（）＊＋，－．／：；＜＝＞？＠［￥］＾＿‘｛｜｝￣、。・゛゜´｀¨ヽヾゝゞ〃仝々〆〇ー―‐＼～〜∥…‥“〔〕〈〉《》「」『』【】±×÷≠≦≧∞∴♂♀°′″℃￠￡§☆★○●◎◇◇◆□■△▲▽▼※〒→←↑↓〓０-９Ａ-Ｚａ-ｚぁ-んァ-ヶΑ-Ωα-ωА-Яа-я \u2570-\u25ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff \uFF61\uFF62\uFF63\uFF64\uFF70\uFF9E\uFF9F\uFF65\uFF66-\uFF6F\uFF71-\uFF9D]{1,}$" value="">
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Username Kana</td>
                    <td>
                      <div class="form-group">
                        <input class="form-control" placeholder="First Name Kana" name="first_name_kana" type="text" autofocus="" required minlength="8" maxlength="16" pattern="^[\u30a0-\u30ff]{1,}$" value="">
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input class="form-control" placeholder="Last Name Kana" name="last_name_kana" type="text" autofocus="" required minlength="8" maxlength="16" pattern="^[\u30a0-\u30ff]{1,}$" value="">
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Login ID</td>
                    <td colspan="2">
                      <div class="form-group">
                        <input class="form-control" placeholder="" name="login_id" type="text" readonly value="">
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Old Password</td>
                    <td colspan="2">
                      <div class="form-group">
                        <input class="form-control" placeholder="Old Password" id="opass" name="old_password" type="password" minlength="8" maxlength="16" value="" pattern="^[A-z0-9 !#$%&'()*+,-./:;<=>?@[]^_`{|}~\]{1,}$">
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>New Password</td>
                    <td colspan="2">
                      <div class="form-group">
                        <input class="form-control" placeholder="New Password" id="npass" name="new_password" type="password" minlength="8" maxlength="16" value="" pattern="^[A-z0-9 !#$%&'()*+,-./:;<=>?@[]^_`{|}~\]{1,}$">
                        <span id='message'></span>
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Re-enter New Password</td>
                    <td colspan="2">
                      <div class="form-group">
                        <input class="form-control" placeholder="Re-enter New Password" id="rnpass"name="re_new_password" type="password" minlength="8" maxlength="16" value="" pattern="^[A-z0-9 !#$%&'()*+,-./:;<=>?@[]^_`{|}~\]{1,}$" data-match="#npass" data-match-error="Whoops, these don't match">
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td colspan="2">
                      <div class="form-group">
                        <input class="form-control" placeholder="Email" name="email" type="email" minlength="6" maxlength="256" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Job Category</td>
                    <td colspan="2">
                      <div class="form-group">
                        <select name="job_category" id="jobc" required class="form-control">
                          <option value=""></option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                        </select>
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Role</td>
                    <td colspan="2">
                      <div class="form-group">
                        <select name="role" id="role" disabled class="form-control">
                          <option value=""></option>
                          <option value="A1">A1</option>
                          <option value="A2">A2</option>
                          <option value="A3">A3</option>
                          <option value="A4">A4</option>
                        </select>
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Doctor Code</td>
                    <td colspan="2">
                      <div class="form-group">
                        <input class="form-control" id="doctorc" name="doctor_code" disabled type="text" minlength="5" maxlength="10" value="" pattern="^[0-9]{1,}$">
                        <div class="help-block with-errors"></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>


              <button type="submit" class="btn btn-primary form-control">Save</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
</div>

<script type="text/javascript">
document.getElementById('jobc').addEventListener('change', function () {
   if (this.value == 'A') {
      document.getElementById("role").disabled = false;
      document.getElementById("role").required = true;
   }else{
      document.getElementById("role").disabled = true;
      document.getElementById("role").value = null;
      document.getElementById("role").required = false;
      document.getElementById("doctorc").disabled = true;
      document.getElementById("doctorc").value = null;
      document.getElementById("doctorc").required = false;
   }
});

document.getElementById('role').addEventListener('change', function () {
   if (this.value == 'A1') {
      document.getElementById("doctorc").disabled = false;
      document.getElementById("doctorc").required = true;
   }else{
      document.getElementById("doctorc").disabled = true;
      document.getElementById("doctorc").value = null;
      document.getElementById("doctorc").required = false;
   }
});

document.getElementById('opass').addEventListener('change', function () {
   if (this.value != null) {
      document.getElementById("opass").required = true;
      document.getElementById("npass").required = true;
      document.getElementById("rnpass").required = true;
   }else{
      document.getElementById("opass").required = false;
      document.getElementById("npass").required = false;
      document.getElementById("rnpass").required = false;
   }
});

document.getElementById('npass').addEventListener('change', function () {
   if (this.value != null) {
      document.getElementById("opass").required = true;
      document.getElementById("npass").required = true;
      document.getElementById("rnpass").required = true;
   }else{
      document.getElementById("opass").required = false;
      document.getElementById("npass").required = false;
      document.getElementById("rnpass").required = false;
   }
});

document.getElementById('rnpass').addEventListener('change', function () {
   if (this.value != null) {
      document.getElementById("opass").required = true;
      document.getElementById("npass").required = true;
      document.getElementById("rnpass").required = true;
   }else{
      document.getElementById("opass").required = false;
      document.getElementById("npass").required = false;
      document.getElementById("rnpass").required = false;
   }
});      

</script>

<script type="text/javascript">
  $('#opass, #npass').on('keyup', function () {
    if ($('#opass').val() == $('#npass').val()) {
      $('#message').html('Password Must Different with Old Password').css('color', 'red');
    } else 
      $('#message').html('');
  });
</script>

<?php if (isset($_SESSION['check'])): ?>
  <script type="text/javascript">
       $(window).load(function(){
           $('#myModal').modal('show');
        });
  </script> 
<?php
unset($_SESSION['check']);
endif ?>