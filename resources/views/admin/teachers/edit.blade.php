@extends('admin.layouts.layout')

@section('teachers')
    active
@endsection

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="section">
    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('admin.teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Img</label>
                <div class="col-sm-12 col-md-7">
                  <input type="filet" class="form-control" name="img" value="{{ $teacher->img }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name" value="{{ $teacher->name}}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="content" value="{{ $teacher->content }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telegram</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="telegram" value="{{ $teacher->telegram }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Facenook</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="fbook" value="{{ $teacher->fbook }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Instagram</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="instagram" value="{{ $teacher->instagram }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection
