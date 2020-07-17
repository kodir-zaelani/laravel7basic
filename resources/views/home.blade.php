@extends('templates.default')
@section('content')
<h1>Hello, world!</h1>
<strong>Belajar Validasi</strong>
<p>Ubah isi pesan di file /resoures/lang pada edit custome message</p>
<p>Valiasi dibawah menggunakan bootstrap</p>
<p>Tambah fasilitas laravel untuk menyimpan isian field agar tidak hilang dengan menambahkan setelah name="" value="old", kalau ditempatkan sebelum name="" tidak akan ngefek</p>
<p>Validasi dibuat class request subscriptiiontrequest</p>
<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email"> Email address </label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" 
        id="email" name="email" value="{{ old('email') }}" >
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
      </div>
      <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control  @error('description') is-invalid @enderror" id="description" placeholder="Required example textarea"  name="description" >{{ old('description') }}</textarea>
          @error('description')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection