@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                
                <div class="card-header">Daftar rekod baharu</div>

                <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>
                @endif
                    <!-- latihan/create.blade.php -->
                    <form method='post' 
                    action='{{ action("LatihanController@store")}}'>
                        @csrf
                        <input type='text' name='kod'
                        class="form-control"
                        placeholder='Kod Latihan'></input><br>
                        <input type='text' name='namalatihan'
                        class="form-control"
                        placeholder='Tajuk latihan'></input>
                        
                        <select name="idpenceramah" class="form-control">
                            @foreach ($penceramahs as $penceramah)
                            <option value="{{$penceramah->id}}">
                            {{$penceramah->nama}}
                            </option>
                            @endforeach
                        </select>
                        
                        <textarea name='deskripsi' 
                        class="form-control">Deskripsi</textarea>
                        <input type='submit' value='Simpan rekod'
                        class="btn btn-primary"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection