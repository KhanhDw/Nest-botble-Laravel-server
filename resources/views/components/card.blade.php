<div class="card text-left">
  <img class="card-img-top" src="" alt="heheh">
  <div class="card-body">
    @foreach ($users as $user)
      <h5 class="card-title">{{ $user->user_name }}</h5>
      <p class="card-text">{{ $user->user_email }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
      <hr>
    @endforeach
  </div>
</div>