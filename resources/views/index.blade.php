@extends('main')
@section('title')
@section('breadcrumbs')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Hi I'm TheAcoustic </h3>
      </div>
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">It's a developer</h4>
            <p class="card-description"> from 11 software engineer 1
            </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> User </th>
                    <th> Name </th>
                    <th> Age</th>
                    <th> Role</th>
                    <th> Residence </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                    </td>
                    <td> Fakhri </td>
                    <td>
                      17
                    </td>
                    <td> Backend </td>
                    <td> Bandung </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                    </td>
                    <td> Naufal </td>
                    <td>
                      17
                    </td>
                    <td> Frontend </td>
                    <td> Bandung </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                    </td>
                    <td> Nisrina </td>
                    <td>
                      17
                    </td>
                    <td> Designer </td>
                    <td> Bandung</td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                    </td>
                    <td> Restu </td>
                    <td>
                      17
                    </td>
                    <td>  Frontend </td>
                    <td> Bandung </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
</div>
    
@endsection