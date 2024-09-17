    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $titulo }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

                @for ($i = 0; $i < count($lista) - 1; $i++)
                    <li class="breadcrumb-item"><a href="#">{{$lista[$i]}}</a></li>
                @endfor

                <li class="breadcrumb-item active">{{$lista[count($lista)-1]}}</li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>