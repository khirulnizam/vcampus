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
                    action="{{action('LatihanController@update',
                        $latihan->id) }}">
                        <input type="hidden" name="_method" value="put">
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
                        
                        <select name="idpenceramah" class="form-control">
                            @foreach ($penceramahs as $penceramah)
                                @if ($penceramah->id == $latihan->idpenceramah)
                                    <option value="{{$penceramah->id}}" selected>
                                @else
                                    <option value="{{$penceramah->id}}" >
                                @endif
                                    {{$penceramah->nama}}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" 
                        class="btn btn-primary">Simpan kemaskini</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection