@extends('layouts.sidebar')
@section('content')
<div class="pagetitle">
      <h1>Sponsors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item active">Sponsors </li>
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
                    Ajouter Sponsors 
                  </button> <br> <br>
                  <table class="table table-striped">
                      <tr>
                            <TH>Id</TH>
                            <TH>Src</TH>
                            <TH>Alt</TH>
                           <TH>Order</TH>
                           <TH>Action</TH>
                           <th></th>
                      </tr>
                      @foreach($Sponsor as $row)
                          <tr>
                              <td>{{$row->id}}</td>
                              <td ><img src="{{asset('storage/techph/'.$row->image)}}" alt="tech" width="50" height="50"> </td>
                              <td>{{$row->alt}}</td>
                              <td>{{$row->order}}</td>
                              
      
                              <td><form action="{{url('deletesponsors/'.$row->id)}}" method="post">
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
                          <h5 class="modal-title" id="exampleModalLabel">Modifier sponsors</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              <form action="{{url('updatetsponsors/'.$row->id)}}" method="post" enctype="multipart\data">
                                  @csrf
                                  @method('PUT')
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Src</label>
                                      <input type="file" class="form-control" id="exampleFormControlInput1"  
                                        required value="{{$row->img}}" name="img" >
                                  </div>
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Alt</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" 
                                       value="{{$row->alt}}" required placeholder="Alt" name="alt">
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
        <h5 class="modal-title" id="exampleModalLabel">ajouter une nouvelle Sponsors </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="{{url('ajoutersponsors')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Src</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" required name="img">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alt</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Alt" name="alt">
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