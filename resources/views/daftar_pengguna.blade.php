@extends('template')
@section('title', 'Daftar Pengguna')
@section('content')
    <div class="row">
        @if(\Illuminate\Support\Facades\Auth::user()->role == "ticketing")
            <div class="col-md-12">
        @else
            <div class="col-md-9">
        @endif
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    @if(\Illuminate\Support\Facades\Auth::user()->role != "ticketing")
                                        <th class="text-center">Aksi</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $x=1;
                                    $pegawai = \App\User::all();
                                @endphp
                                @foreach($pegawai as $pet)
                                    <tr>
                                        <td>{{$x}}</td>
                                        <td>{{$pet->name}}</td>
                                        <td>{{$pet->role}}</td>
                                        <td>{{$pet->email}}</td>
                                        @if(\Illuminate\Support\Facades\Auth::user()->role != "ticketing")
                                        <td class="d-flex justify-content-center">
                                            <a  href="{{route('pengguna_edit', $pet->id)}}" class="btn btn-gradient-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <form action="{{route('pengguna_delete')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$pet->id}}">
                                                <button type="submit" class="ml-1 btn btn-gradient-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        @endif
                                    </tr>
                                    @php $x++ @endphp
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th width="10">No</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    @if(\Illuminate\Support\Facades\Auth::user()->role != "ticketing")
                                    <th class="text-center">Aksi</th>
                                    @endif
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @if(\Illuminate\Support\Facades\Auth::user()->role != "ticketing")
        <div class="col-md-3">
            <section class="hk-sec-wrapper">
                <form action="{{route('pengguna_new')}}" method="POST">
                    @csrf
                    <label class="text-muted mb-0">Nama</label>
                    <input type="text" class="form-control mt-0" name="name" required>

                    <label class="text-muted mb-0">Password</label>
                    <input type="password" class="form-control mt-0" name="password" required>

                    <label class="text-muted mb-0 mt-5">Email</label>
                    <select name="role" class="form-control">
                        <option selected class="bg-dark-100 text-white" disabled>Role</option>
                        <option value="admin">Admin</option>
                        <option value="ticketing">Ticketing</option>
                        <option value="barang">Barang</option>
                    </select>

                    <label class="text-muted mb-0 mt-5">Email</label>
                    <input type="email" class="form-control mt-0" name="email" required>

                    <button type="submit" class="btn btn-gradient-primary text-uppercase font-weight-bold mt-10 btn-block">Submit</button>
                </form>
            </section>
        </div>
        @endif
    </div>
@endsection
