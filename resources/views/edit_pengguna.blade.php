@extends('template')
@section('title', 'Edit Pengguna')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <section class="hk-sec-wrapper">
                <form action="{{route('pengguna_edit_post')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <label class="text-muted mb-0">Nama</label>
                    <input type="text" class="form-control mt-0" name="name" value="{{$user->name}}" required>

                    <label class="text-muted mb-0">Password</label>
                    <input type="password" class="form-control mt-0" name="password" required>

                    <label class="text-muted mb-0 mt-5">Email</label>
                    <select name="role" class="form-control">
                        <option selected class="bg-dark-100 text-white" disabled>Role</option>
                        <option value="admin" @if($user->role == "admin") selected @endif @if(\Illuminate\Support\Facades\Auth::user()->role != "admin") disabled @endif>Admin</option>
                        <option value="ticketing" @if($user->role == "ticketing") selected @endif @if(\Illuminate\Support\Facades\Auth::user()->role != "admin") disabled @endif>Ticketing</option>
                        <option value="barang" @if($user->role == "barang") selected @endif @if(\Illuminate\Support\Facades\Auth::user()->role != "admin") disabled @endif>Barang</option>
                    </select>

                    <label class="text-muted mb-0 mt-5">Email</label>
                    <input type="email" class="form-control mt-0" name="email" value="{{$user->email}}" required>

                    <button type="submit" class="btn btn-gradient-primary text-uppercase font-weight-bold mt-10 btn-block">Submit</button>
                </form>
            </section>
        </div>
    </div>
@endsection
