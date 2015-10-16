<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" />
    <title>title</title>
</head>
<body>
    
    <div class="container">
    <div class="row">
    <div class="col-xs-4">
    </div>
    <div class="col-xs-4">
    <div class="modal-header">
        
        <h4>用户登录</h4>
    </div>
    <div class="modal-body">
      
        <form role="form" method="get" action="{{url('/')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="email">用户名</label>
                <input name="username" type="username" class="form-control" id="username" placeholder="输入用户名">
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="密码">
            </div>
            <div class="modal-footer">
        <button type="submit" class="btn btn-primary">登录</button>
    </div>
        </form>

    </div>
    
    </div>
    <div class="col-xs-4">
    </div>
    </div>
    </div>
<script src="//cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>

<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</body>
</html>