@include('components.head')
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="login-brand">
              <img src="/img/gradasi.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form action="{{ url('/auth/register') }}" method="POST" class="needs-validation" novalidate="">
                  @csrf
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-at"></i>
                          </div>
                        </div>
                      <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="notelp">No Telpon</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i style="transform: scale(-1, 1);" class="fas fa-phone"></i>
                          </div>
                      </div>
                      <input id="notelp" type="text" class="form-control" name="notelp" tabindex="1" required autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="city">Kota</label>
                    <select class="select2 form-control" name="city" id="city">
                      @foreach ($cities as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Konfimasi Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Daftar Sekarang
                    </button>
                  </div>
                </form>
                <center>Sudah punya akun ? <a href="{{ url('/auth') }}">Masuk</a></center>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Didan Adha {{ date('Y') }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @include('components.script')
</body>
</html>
