@extends('layouts.default')

@section('title', 'Gestor Work - projetos')
    
@section('conteudo')

<div class="page-wrapper">
<div class="page-body">

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Todos projetos</h3>
      </div>
      <div class="card-body border-bottom py-3">
        <div class="d-flex">
          <div class="text-muted">
            Total
            <div class="mx-2 d-inline-block">
              <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count" readonly>
            </div>
            
          </div>
          <div class="ms-auto text-muted">
           Pesquisar
            <div class="ms-2 d-inline-block">
              <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
            </div>
          </div>
        </div>
      </div>

      <div class="container-xl">
        <div class="row row-cards">
          <div class="col-sm-6 col-lg-3">
            <div class="card card-md">
              <div class="card-body">
                <div class="text-uppercase text-muted font-weight-medium">Free</div>

                <div class="display-5 fw-bold my-3"></div>
                <h3>Sistema de Gestão Escolar</h3>
                <ul class="list-unstyled lh-lg">
                 
                  <li>
                    
                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 20/10/2023</li>

                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 30/10/2023</li>
                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->

                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> 3 Tarefas</li>
                    
                  </li>
                  <li>
                    <!-- Download SVG icon from http://tabler-icons.io/i/x -->
                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1 text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    Activo
                  </li>
                  <li class="d-none">
                    <!-- Download SVG icon from http://tabler-icons.io/i/x -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1 text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                    Private Messages
                  </li>
                
                </ul>
                <div class="text-center mt-4">
                  <a href="#" class="btn w-100 btn-green">ver</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card card-md">
              <div class="ribbon ribbon-top ribbon-bookmark bg-green">
                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
              </div>
              <div class="card-body">
                <div class="text-uppercase text-muted font-weight-medium">Premium</div>
                <div class="display-5 fw-bold my-3"></div>
                <h3>Sistemas de boot </h3>
                <ul class="list-unstyled lh-lg">
                 
                  <li>
                    
                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 20/10/2023</li>

                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 30/10/2023</li>
                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->

                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> 3 Tarefas</li>
                    
                  </li>
                  <li>
                    <!-- Download SVG icon from http://tabler-icons.io/i/x -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1 text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    Finalizado
                  </li>
              
                </ul>
                <div class="text-center mt-4">
                  <a href="#" class="btn btn-green w-100">ver</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card card-md">
              <div class="card-body">
                
                  <div class="text-uppercase text-muted font-weight-medium">Premium</div>
                  <div class="display-5 fw-bold my-3"></div>
                  <h3>Sistemas de boot </h3>
                  <ul class="list-unstyled lh-lg">
                   
                    <li>
                      
                      <li><i class="fa fa-calendar" aria-hidden="true"></i> 20/10/2023</li>
  
                      <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 30/10/2023</li>
                      <!-- Download SVG icon from http://tabler-icons.io/i/check -->
  
                      <li><i class="fa fa-check-circle" aria-hidden="true"></i> 3 Tarefas</li>
                      
                    </li>
                    <li>
                      <!-- Download SVG icon from http://tabler-icons.io/i/x -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1 text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                      Desativado
                    </li>
                
                  </ul>
                  <div class="text-center mt-4">
                    <a href="#" class="btn btn-green w-100">ver</a>
                  </div>
           
                
               
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card card-md">
              <div class="card-body text-center">
            
                  <div class="text-uppercase text-muted font-weight-medium">Premium</div>
                  <div class="display-5 fw-bold my-3"></div>
                  <h3>Sistemas de boot </h3>
                  <ul class="list-unstyled lh-lg">
                   
                    <li>
                      
                      <li><i class="fa fa-calendar" aria-hidden="true"></i> 20/10/2023</li>
  
                      <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 30/10/2023</li>
                      <!-- Download SVG icon from http://tabler-icons.io/i/check -->
  
                      <li><i class="fa fa-check-circle" aria-hidden="true"></i> 3 Tarefas</li>
                      
                    </li>
                    <li>
                      <!-- Download SVG icon from http://tabler-icons.io/i/x -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1 text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                      Desativado
                    </li>
                
                  </ul>
                  <div class="text-center mt-4">
                    <a href="#" class="btn btn-green w-100">ver</a>
                  </div>
            
                
               
              </div>
            </div>
          </div>
          
        </div>
      </div>

        
  
      <div class="card-footer d-flex align-items-center">
        <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
        <ul class="pagination m-0 ms-auto">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
              <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
              prev
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#">
              next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  </div>
</div>

@endsection