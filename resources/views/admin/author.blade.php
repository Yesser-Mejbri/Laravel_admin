@extends('layouts.sidebar')
@section('content')
<div class="pagetitle">
  <h1>Authors</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
      <li class="breadcrumb-item active">Authors </li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 850px"> <i class="bi bi-person-plus"></i>
            Authors
          </button> <br> <br>
          <table class="table table-striped">
            <tr>
              <TH>Id</TH>
              <TH>First Name</TH>
              <TH>Last Name</TH>
              <TH>Organism</TH>
              <TH>Countrie</TH>
              <TH>Special Session</TH>
              <TH>Action</TH>
              <th></th>
            </tr>

            @foreach($Author as $row)
            <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->first_name}}</td>
              <td>{{$row->last_name}}</td>
              <td>{{$row->organism}}</td>
              <td>{{$row->id_special}}</td>
              <td>{{$row->id_countries}}</td>


              <td>
                <form action="{{url('deleteauthors/'.$row->id)}}" method="post">
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
                    <h5 class="modal-title" id="exampleModalLabel">Modifier Keynote</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{url('updatetauthors/'.$row->id)}}" method="post" enctype="multipart\data">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" required value="{{$row->first_name}}" placeholder="first name" name="first_name">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" required value="{{$row->last_name}}" placeholder="last name" name="last_name">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Organism</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$row->organism}}" required placeholder="description" name="organism">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Spiciale Session</label>
                        <select name="selectSession" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                          @foreach ($Specialsession as $ro)
                          <option value="{{$ro->id}}">{{$ro->title}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Countrie</label>
                        <select name="selectCountrie" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                          @foreach ($Countrie as $rop)
                          <option value="{{$rop->id}}">{{$rop->name}}</option>
                          @endforeach
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajouter un nouveau Author </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{url('ajouterauthors')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">First Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="First Name" name="first_name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Last Name" name="last_name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Organism</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Organism" name="organism">
          </div>
          <label for="exampleFormControlInput1" class="form-label">special session</label>
          <select name="selectSession" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            @foreach ($Specialsession as $ro)
              <option value="{{$ro->id}}">{{$ro->title}}</option>
            @endforeach
          </select>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Countrie</label>
            <select name="selectCountrie" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
              @foreach ($Countrie as $rop)
                <option value="{{$rop->id}}">{{$rop->name}}</option>
              @endforeach
            </select>
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
</div>

@endsection