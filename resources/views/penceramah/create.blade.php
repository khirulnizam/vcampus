@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                
                <div class="card-header">Daftar penceramah</div>

                <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>
                @endif

                <!-- show validation errors -->

                @if ($errors->any())
                <div class="alert alert-warning">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                    <!-- penceramah/create.blade.php -->
                    <form method='post' 
                    action='{{ action("PenceramahController@store")}}'>
                        @csrf
                        <input type='text' name='nama'
                        class="form-control"
                        placeholder='Nama penceramah'></input>

                        <input type='date' name='tarikhlahir'
                        class="form-control"
                        placeholder='Tarikh lahir'></input>

                        <input type='text' name='noic'
                        class="form-control"
                        placeholder='No KP'></input>

                        <input type='text' name='bidang'
                        class="form-control"
                        placeholder='Bidang'></input>

                        <textarea name='bio' 
                        class="form-control">Biografi ringkas</textarea>

                        <input type='submit' value='Simpan rekod'
                        class="btn btn-primary"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection