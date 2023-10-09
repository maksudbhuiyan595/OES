<div class="header">
      <nav class="navbar navbar-expand-lg navbar-nav bg-secondary ">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Online Exam System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('subject')}}">Subjects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Levels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Exams</a>
            </li>
           
          </ul>
          <form class="d-flex btn-group" role="group">
            <a href="{{route('login')}}" class="btn btn-success">Login</a>
            <a href="{{route('register')}}" class="btn btn-success">Register</a>
            
          </form>
        </div>
      </div>
    </nav>
  </div>