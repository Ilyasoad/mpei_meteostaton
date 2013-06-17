<!--В хедере подключаются скрипты и bootstrap-->
<?php echo $header;?>
 
<div class="container" style="margin-top: 15%;">
    <div class="row">
        
        <div class="span3"> </div>
              <div class="span4">
                    <form method="post" accept-charset="utf-8" class="form-horizontal">
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Login</label>
                        <div class="controls">
                          <input type="text" id="username" name="username" placeholder="admin" />
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Пароль</label>
                        <div class="controls">
                          <input type="password" id="password" name="password" placeholder="Password" />
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox" id="checkbox" name="checkbox" /> Запомнить меня
                          </label>
                          <button type="submit" class="btn">Вход</button>
                        </div>
                      </div>
                    </form>         
              </div>
    
    </div>

</div>