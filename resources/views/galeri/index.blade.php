@extends('layouts.app')

@section('content')
    
    <div class="galeri">
        <div id="topdes" >
            <h2 align="left" style="margin-left: 3%">Galeri HARPA 4</h2>
            <img src="{{ asset('assets') }}/img/welcome_bg.png" style="width:15%; height: 3px; margin-top: -4%;margin-left: 3%; z-index:-1;">
            @If(Auth::user() != null)
            <a href="{{ url('/galeri/create') }}" class="btn btn-success btn-sm" title="Add New galeri" style="z-index: 5;margin-left: -15%">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
            @endif
        </div>

      @foreach($galeri as $item)
        <div class="full-objek">
            <div id="objek-galeri">
                <img src="{{ 'uploads/'.$item->foto}}" class="gambar1" />
                <div class="ket"><td>{{ $item->keterangan }}</td></div>
                <div class="ket1">
                    <
                <form action="{{ route('galeri.destroy', @$item->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}

                    <button type="submit" class="ket1 btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                </form>
                </div>
            </div>
        </div>
    @endforeach

@endsection
