@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                
                <div class="card-header">Paparan rekod </div>

                <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>
                @endif
                    <!-- latihan/create.blade.php -->
                    <form method='post' 
                    action=''>
                        @csrf
                        <input type='text' name='kod'
                        class="form-control"
                        value="{{ $latihan->kod }}"
                        placeholder='Kod Latihan'></input><br>
                        <input type='text' name='namalatihan'
                        value="{{ $latihan->namalatihan }}"
                        class="form-control"
                        placeholder='Tajuk latihan'></input><br>
                        <textarea name='deskripsi' 
                        class="form-control">{{ $latihan->deskripsi }}</textarea>
                        <button type="button" onclick="history.back()"
                        class="btn btn-primary">Kembali</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection