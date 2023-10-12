
<div class="header">
      <nav class="navbar navbar-expand-lg navbar-nav bg-secondary ">
      <div class="container-fluid">
        <a style="font-size: 30px;" class="navbar-brand text-white" href="{{route('home')}}">Online Exam System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a style="font-size: 20px;" class="nav-link active" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a style="font-size: 20px;" class="nav-link" href="#">Subjects</a>
            </li>
            <li class="nav-item">
              <a style="font-size: 20px;" class="nav-link" href="#">Levels</a>
            </li>
            <li class="nav-item">
              <a style="font-size: 20px;" class="nav-link" href="#">Exams</a>
            </li>
           
          </ul>
          <form class="d-flex btn-group" role="group">
            <a style="font-size: 20px;" href="{{route('login')}}" class="btn btn-success">Login</a>
            <a style="font-size: 20px;" href="{{route('register')}}" class="btn btn-success">Register</a>
            
          </form>
        </div>
      </div>
    </nav>
  </div>