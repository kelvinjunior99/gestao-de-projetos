@extends('layouts.default')

@section('title', 'Caluga Gest - Home')
    
@section('conteudo')


<div class="page-wrapper">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Menu
          </div>

          <h2 class="page-title d-none">
            Combo layout
          </h2>

        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <span class="d-none d-sm-inline">
              <a href="#" class="btn d-none">
                New view
              </a>
            </span>
            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              criar novo projeto
            </a>
            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Page body -->
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-deck row-cards">
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="subheader"></div>
                <div class="ms-auto lh-1">
                  <div class="dropdown">
                    <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Escolher</a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Meus projetos</a>
                      <a class="dropdown-item" href="{{ route('lista-projetos')}}">Todos</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="h1 mb-3">Projetos</div>
              <div class="d-flex mb-2">
                <div></div>
                <div class="ms-auto">
                  <span class="text-green d-inline-flex align-items-center lh-1">
                    10 <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                  </span>
                </div>
              </div>
              <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 100%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                  <span class="visually-hidden">75% Complete</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="subheader"></div>
                <div class="ms-auto lh-1">
                  <div class="dropdown">
                    <a class="dropdown-toggle text-muted" href="#">Ver</a>
                  </div>
                </div>
              </div>
              <div class="h1 mb-3">Membros</div>
              <div class="d-flex mb-2">
                <div></div>
                <div class="ms-auto">
                  <span class="text-green d-inline-flex align-items-center lh-1">
                    22 <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                  </span>
                </div>
              </div>
              <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 100%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                  <span class="visually-hidden">75% Complete</span>
                </div>
              </div>
            </div>
          </div>
        </div>

          <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="subheader"></div>
                <div class="ms-auto lh-1">
                   <div class="dropdown">
                    <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Escolher</a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Minhas tarefas</a>
                      <a class="dropdown-item" href="#">Todas</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="h1 mb-3">Tarefas</div>
              <div class="d-flex mb-2">
                <div></div>
                <div class="ms-auto">
                  <span class="text-green d-inline-flex align-items-center lh-1">
                    22 <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                  </span>
                </div>
              </div>
              <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 100%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                  <span class="visually-hidden">75% Complete</span>
                </div>
              </div>
            </div>
          </div>
        </div>

           <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="subheader"></div>
                <div class="ms-auto lh-1">
                   <div class="dropdown">
                    <a href="teste.html" class=" text-muted">Ver</a>
                  </div>
                </div>
              </div>
              <div class="h1 mb-3">Pedidos</div>
              <div class="d-flex mb-2">
                <div></div>
                <div class="ms-auto">
                  <span class="text-green d-inline-flex align-items-center lh-1">
                    22 <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                  </span>
                </div>
              </div>
              <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 100%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                  <span class="visually-hidden">75% Complete</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

 
</div>
</div>

<!---Modal--->
<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">New report</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
      </div>
      <label class="form-label">Report type</label>
      <div class="form-selectgroup-boxes row mb-3">
        <div class="col-lg-6">
          <label class="form-selectgroup-item">
            <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
            <span class="form-selectgroup-label d-flex align-items-center p-3">
              <span class="me-3">
                <span class="form-selectgroup-check"></span>
              </span>
              <span class="form-selectgroup-label-content">
                <span class="form-selectgroup-title strong mb-1">Simple</span>
                <span class="d-block text-muted">Provide only basic data needed for the report</span>
              </span>
            </span>
          </label>
        </div>
        <div class="col-lg-6">
          <label class="form-selectgroup-item">
            <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
            <span class="form-selectgroup-label d-flex align-items-center p-3">
              <span class="me-3">
                <span class="form-selectgroup-check"></span>
              </span>
              <span class="form-selectgroup-label-content">
                <span class="form-selectgroup-title strong mb-1">Advanced</span>
                <span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
              </span>
            </span>
          </label>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="mb-3">
            <label class="form-label">Report url</label>
            <div class="input-group input-group-flat">
              <span class="input-group-text">
                https://tabler.io/reports/
              </span>
              <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="mb-3">
            <label class="form-label">Visibility</label>
            <select class="form-select">
              <option value="1" selected>Private</option>
              <option value="2">Public</option>
              <option value="3">Hidden</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-lg-6">
          <div class="mb-3">
            <label class="form-label">Client name</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mb-3">
            <label class="form-label">Reporting period</label>
            <input type="date" class="form-control">
          </div>
        </div>
        <div class="col-lg-12">
          <div>
            <label class="form-label">Additional information</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
        Cancel
      </a>
      <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
        Create new report
      </a>
    </div>
  </div>
</div>
</div>

 
@endsection