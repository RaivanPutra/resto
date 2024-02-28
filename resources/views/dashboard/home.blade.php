@extends('templates.main')

@push('style')
@endpush

@section('content')
Home
@endsection

@section('container')
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="card small-box mb-3 text-bg shadow" style="background-color: #2F323B;">
          <div class="card-body text-center text-light">
            <h3 class="card-text fw-bolder">{{ $menuCount }}</h3>
            <p class="card-text fw-bold">Data Menu</p>
          </div>
          <div class="card-footer text-center" style=" background-color: #607ABD;">
            <a href="{{ route('menu.index') }}" class="text-decoration-none text-light">Lihat Data <span data-feather="arrow-right-circle" class="align-text-bottom"></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card small-box mb-3 text-bg" style="background-color: #1B2336;">
          <div class="card-body text-center text-light">
            <h3 class="card-text fw-bolder">{{ $memberCount }}</h3>
            <p class="card-text fw-bold">Data Member</p>
          </div>
          <div class="card-footer text-center" style=" background-color: #3A4F52;">
            <a href="{{ route('member.index') }}" class="text-decoration-none text-light">Lihat Data <span data-feather="arrow-right-circle" class="align-text-bottom"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card -->

</section>
@endsection

@push('script')
@endpush