<!-- mainbody -->
<div class="clearfix"> 
    
    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-body">   
                <div class="col-xs-12">
                    <form action="<?php echo $base_url."users/edit/0"; ?>" method="POST" class="form-horizontal" role="form">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label>C. Password</label>
                            <input type="password" class="form-control" name="cpassword">
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">
                                SAVE
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-body">
                
                <div class="col-xs-12">
                    <form action="<?php echo $base_url."users/login"; ?>" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block">
                                LOGIN
                            </button>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>  
<!-- /. -->