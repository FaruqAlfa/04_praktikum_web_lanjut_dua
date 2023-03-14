@extends('home')
@section('pengalaman')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            <div class="row">
              <div class="col-12">
                <h4>Pengalaman Kuliah</h4>
                  <div class="post">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="/img/Fahmi.jpg" alt="user image">
                      <span class="username">
                        <a href="#">Mukhamad Faruq Al Fahmi</a>
                      </span>
                      <span class="description"></span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                   {{ $experience->body }}
                    </p>

                    <p>
                      <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i></a>
                    </p>
                  </div>

                  <div class="post clearfix">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="/img/Rizqi.jpg" alt="User Image">
                      <span class="username">
                        <a href="#">Rizqi Rohmatul Huda</a>
                      </span>
                      <span class="description"></span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                      {{ $pengalaman->body }}
                    </p>
                    <p>
                      <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i></a>
                    </p>
                  </div>

              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
            <h3 class="text-primary"><i class="fas fa-paint-brush"></i>POLITEKNIK NEGERI MALANG</h3>
            <p class="text-muted">Polinema adalah institusi pendidikan tinggi vokasi yang terletak di kota Malang.
               Malang adalah kota terbesar kedua di Jawa Timur,Indonesia. </p>
            <br>
            <div class="text-muted">
              <p class="text-sm">universitas
                <b class="d-block">POLITEKNIK NEGERI MALANG</b>
              </p>
              <p class="text-sm">Project Leader
                <b class="d-block">JTI POLINEMA</b>
              </p>
            </div>

            <h5 class="mt-5 text-muted">Project files</h5>
            <ul class="list-unstyled">
              <li>
                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Alamat :	:	Jl. Soekarno Hatta No. 9 Malang</a>
              </li>
              <li>
                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> Telepon 	:	(0341) 404424-404425</a>
              </li>
              <li>
                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email : cs@polinema.ac.id</a>
              </li>
              <li>
                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> <img src="img/polinema.png" alt="" width="20px; height:auto;"></a>
              </li>
              <li>
                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Kode Pos :	:	65141</a>
              </li>
            </ul>
            <div class="text-center mt-5 mb-3">
              <a href="#" class="btn btn-sm btn-primary">Add files</a>
              <a href="#" class="btn btn-sm btn-warning">Report contact</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
@endsection