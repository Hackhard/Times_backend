<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">{{config('app.name','NEWAPP')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/newapp/public/">Home <span class="sr-only">(current)Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/newapp/public/about/">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/newapp/public/posts/create">Create</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="/newapp/public/posts/1/brat">Display</a>
                </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/newapp/public/posts/"><b>JSON</b></a>
                  </li>
          </ul>
        </div>
      </nav>