@extends('layouts.sidebar')
@section('content')
<div class="pagetitle">
      <h1>Special Sessions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item active">Special Sessions </li>
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
                    Ajouter Special Sessions 
                  </button> <br> <br>
                  <table class="table table-striped">
                      <tr>
                            <TH>Id</TH>
                            <TH>Titre</TH>
                            <TH>Description</TH>
                           <TH>Order</TH>
                           <TH>Action</TH>
                           <TH></TH>
                      </tr>
                      @foreach($Specialsession as $row)
                          <tr>
                              <td>{{$row->id}}</td>
                              <td>{{$row->title}}</td>
                              <td>{{$row->description}}</td>
                              <td>{{$row->order}}</td>
                              
      
                              <td><form action="{{url('deletesession/'.$row->id)}}" method="post">
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
                          <h5 class="modal-title" id="exampleModalLabel">Modifier organizer</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              <form action="{{url('updatetsession/'.$row->id)}}" method="post" enctype="multipart\data">
                                  @csrf
                                  @method('PUT')
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Title</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" 
                                      required value="{{$row->title}}" placeholder="Link" name="title">
                                  </div>
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Description</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" 
                                       value="{{$row->description}}" required placeholder="description" name="description">
                                  </div>
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Order</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" 
                                       value="{{$row->order}}" required placeholder="order" name="order">
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
        <h5 class="modal-title" id="exampleModalLabel">ajouter une nouvelle Organizers </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="{{url('ajoutersession')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Titre" name="title">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Description" name="description">
                </div>
                
    
                <div class="mb-3">
                    <label  for="exampleFormControlInput1" class="form-label" >Order</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Order" name="order">
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