@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                
                <div class="card-header">Senarai/ Carian rekod</div>

                <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>
                @endif
                <form method='get' class="form-inline"
                action='{{ action("LatihanController@index") }}' >
                    <input type='text' name='keyword' class='form-control'>
                    <button type='submit' class='btn btn-primary'
                    ><i class="fa fa-search"></i></button>
                </form>
                <table class="table table-striped">
                    <tr>
                        <td>Kod</td>
                        <td>Latihan</td>
                        <td>Deskripsi</td>
                        <td>Tindakan</td>
                        <td></td>
                    </tr>
                    @foreach ($latihans as $latihan)
                    <tr>
                        <td>{{ $latihan->kod }}</td>
                        <td>{{ $latihan->namalatihan }}</td>
                        <td>{{ $latihan->deskripsi }}</td>
                        <td><a class="btn btn-success"
                            href="{{action('LatihanController@show',
                                $latihan->id)}}">
                            <i class="fa fa-align-justify"></i>
                            </a>
                            <a class="btn btn-warning"
                            href="{{action('LatihanController@edit',
                                $latihan->id)}}">
                            <i class="fa fa-edit"></i>
                            </a>
                        </td><td>
                            <form method="post"
                            action="{{action('LatihanController@destroy',
                                $latihan->id)}}">
                                <input type="hidden" name="_method" value="delete">
                                @csrf
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Betul nak padam?')">
                                    <i class="fa fa-trash"></i>
                                </button\>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <!-- pagination control -->
                {{ $latihans->links() }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection