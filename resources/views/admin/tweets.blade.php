@extends('layouts.sidebar')
@section('content')
<div class="pagetitle">
      <h1>Tweets</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item active">Tweets </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"style="margin-left: 850px"> <i class="bi bi-person-plus"></i>
                  Ajouter Tweets 
                  </button> <br> <br>
                  <table class="table table-striped">
                      <tr>
                            <TH>Id</TH>
                            <TH>Link</TH>
                            <TH>Date</TH>
                          <TH>Action</TH>
                          <th></th>
                      </tr>
                    @foreach($Tweet as $row)
                          <tr>
                              <td>{{$row->id}}</td>
                              <td>{{$row->link}}</td>
                              <td>{{$row->date}}</td>
                             
      
                              <td><form action="{{url('deletetweet/'.$row->id)}}" method="post">
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
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modifier Tweet</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              <form action="{{url('updatetweet/'.$row->id)}}" method="post" enctype="multipart\data">
                                  @csrf
                                  @method('PUT')
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">link</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" 
                                      required value="{{$row->link}}" placeholder="Link" name="link">
                                  </div>
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Date</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" 
                                       value="{{$row->date}}" required placeholder="Date" name="date">
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajouter une nouvelle Tweet </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="{{url('ajoutertweet')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Link</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Link" name="link">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" required placeholder="Date" name="date">
                </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annuler</button>
        <button type="submit" class="btn btn-primary">ajouter</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection