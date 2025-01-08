@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb', 'Dashboard')

@section('content')
    <div class="row">
      <div class="ms-3">
        <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
        <p class="mb-4">
        Tableau de board, Administrateur        </p>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-2 ps-3">
            <div class="d-flex justify-content-between">
              <div>
                <p class="text-sm mb-0 text-capitalize">Recette du jour </p>
                <h4 class="mb-0">FCFA 50.0000.000</h4>
              </div>
              <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                <i class="material-symbols-rounded opacity-10">weekend</i>
              </div>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-2 ps-3">
            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+55% </span>PLus que la semaine dernière</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-2 ps-3">
            <div class="d-flex justify-content-between">
              <div>
                <p class="text-sm mb-0 text-capitalize">Nombre d'Utilisateurs</p>
                <h4 class="mb-0">2300</h4>
              </div>
              <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                <i class="material-symbols-rounded opacity-10">person</i>
              </div>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-2 ps-3">
            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+3% </span>than last month</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-2 ps-3">
            <div class="d-flex justify-content-between">
              <div>
                <p class="text-sm mb-0 text-capitalize">Nombre de stockistes</p>
                <h4 class="mb-0">1.300</h4>
              </div>
              <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                <i class="material-symbols-rounded opacity-10">leaderboard</i>
              </div>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-2 ps-3">
            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+2% </span>Plus que le distributeur </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-2 ps-3">
            <div class="d-flex justify-content-between">
              <div>
                <p class="text-sm mb-0 text-capitalize">Nombre de distributeur</p>
                <h4 class="mb-0">100</h4>
              </div>
              <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                <i class="material-symbols-rounded opacity-10">weekend</i>
              </div>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-2 ps-3">
            <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">-2% </span>than yesterday</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h6 class="mb-0 ">Vues Site</h6>
            <p class="text-sm ">Performance sur la semaine</p>
            <div class="pe-2">
              <div class="chart">
                <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
            <hr class="dark horizontal">
          {{--   <div class="d-flex ">
              <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
            </div> --}}
          </div>
        </div>
      </div>

    </div>
    <div class="row mb-4">
      <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>Dernières Activités</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-check text-info" aria-hidden="true"></i>
                  <span class="font-weight-bold ms-1">30 dernières activités</span> de ce mois
                </p>
              </div>
              <div class="col-lg-6 col-5 my-auto text-end">
                <div class="dropdown float-lg-end pe-4">
                  <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-ellipsis-v text-secondary"></i>
                  </a>
                  <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Activités</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Membre</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Material XD Version</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                          <img src="../assets/img/team-1.jpg" alt="team1">
                        </a>

                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Add Progress Track</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                          <img src="../assets/img/team-2.jpg" alt="team5">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                          <img src="../assets/img/team-4.jpg" alt="team6">
                        </a>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> $3,000 </span>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">10%</span>
                          </div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Fix Platform Errors</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                          <img src="../assets/img/team-3.jpg" alt="team8">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                          <img src="../assets/img/team-1.jpg" alt="team9">
                        </a>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> Not set </span>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">100%</span>
                          </div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm me-3" alt="spotify">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Launch our Mobile App</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                          <img src="../assets/img/team-4.jpg" alt="user1">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                          <img src="../assets/img/team-3.jpg" alt="user2">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                          <img src="../assets/img/team-4.jpg" alt="user3">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                          <img src="../assets/img/team-1.jpg" alt="user4">
                        </a>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> $20,500 </span>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">100%</span>
                          </div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm me-3" alt="jira">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Add the New Pricing Page</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                          <img src="../assets/img/team-4.jpg" alt="user5">
                        </a>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> $500 </span>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">25%</span>
                          </div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm me-3" alt="invision">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Redesign New Online Shop</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                          <img src="../assets/img/team-1.jpg" alt="user6">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                          <img src="../assets/img/team-4.jpg" alt="user7">
                        </a>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> $2,000 </span>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">40%</span>
                          </div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

@endsection
