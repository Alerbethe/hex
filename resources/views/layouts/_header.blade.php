  <header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <a href="{{ route('home') }}" id="logo">He Xiang</a>
        <nav>
             <ul class="nav navbar-nav navbar-left">
              <li><a href="#">前端</a></li>
              <li><a href="#">后端</a></li>
              <li><a href="#">语言</a></li>
              <li><a href="#">web安全</a></li>
              <li><a href="#">阅读</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  随笔 <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="#">书法</a></li>
                  <li><a href="#">美食</a></li>
                  <li><a href="#">演讲</a></li>
                  <li class="divider"></li>
                  <li><a href="#">分离的链接</a></li>
                  <li class="divider"></li>
                  <li><a href="#">另一个分离的链接</a></li>
              </ul>
          </li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('find') }}">帮助</a></li>
            <li><a href="#">登录</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
