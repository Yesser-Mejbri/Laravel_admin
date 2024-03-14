@extends('layouts.sidebar')
@section('content')
<div class="pagetitle">
  <h1>Users</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
      <li class="breadcrumb-item active">Users </li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <H2>liste des utilisateurs</H2><br><br>
          <table class="table table-striped">
            <tr>
              <TH>Id</TH>
              <TH>Name</TH>
              <TH>Email</TH>
              <TH>Status</TH>
              <TH>Action</TH>
              <th></th>
            </tr>
            @foreach($User_Admin as $row)
            <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->status}}</td>

              <td>
                <form action="{{url('deleteusers/'.$row->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
              </td>
              <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#up{{$row->id}}">
                  <i class="bi bi-pencil-fill"></i>
                </button>
              </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="up{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  
                  <div class="modal-body">
                    <form action="{{url('updatetusers/'.$row->id)}}" method="post" enctype="multipart\data">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">link</label>
                        <select name="selectStatus">
                    
                          <option value="0">Désactiver</option>
                          <option value="1">Activer</option>
                         
                        </select>
                      </div>
                     



                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annuler</button>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            @endforeach

          </table>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection