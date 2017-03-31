@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Anggota</div>
                    <div class="panel-body">
                    @If(Auth::user() != null && Auth::user()->level != 0)
                        <a href="{{ url('/anggota/create') }}" class="btn btn-success btn-sm" title="Add New anggotum">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Anggota
                        </a>

                    @endif



                    

                        {!! Form::open(['method' => 'GET', 'url' => '/anggota', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <!-- <input type="text" class="form-control" name="search" placeholder="Search..."> -->
                            <!-- <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span> -->
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive" align="center">
                            <table class="table table-borderless" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Generasi</th>
                                        <th>No Angklung</th>
                                        @If(Auth::user() != null && Auth::user()->level != 0)
                                        <th>Aksi</th>@else @endif
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>{{ $item->generasi }}</td>
                                        <td>{{ $item->angklung }}</td>
                                        @If(Auth::user() != null && Auth::user()->level != 0)
                                        <td class="text-center">
                                          
                                          <form action="{{ route('anggota.destroy', @$item->id_anggota) }}" method="POST">
                                              {{ method_field('DELETE') }}
                                              {{ csrf_field() }}
                                              <a href="{{ route('anggota.edit', @$item->id_anggota) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                              <button type="submit" class="btn btn-delete btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                          </form>
                                        </td>@else @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
