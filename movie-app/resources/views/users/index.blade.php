@extends('layouts.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Users Data</h1>
        <div class="d-flex justify-content-between mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
            <a href="#">
                <button class="btn btn-success" type="submit">Create Data</button>
            </a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Users Data
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Pasword</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Poster</th>
                            <th>Username</th>
                            <th>password</th>
                            <th>email</th>
                            <th>role</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Alifah</td>
                            <td>alfhhza</td>
                            <td>qwerty</td>
                            <td>alifg1527@gmai.com</td>
                            <td>Admin</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Zahro</td>
                            <td>zaahro</td>
                            <td>asdfgh</td>
                            <td>azahro23@gmail.com</td>
                            <td>user</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dzakiyyah</td>
                            <td>kiyaa</td>
                            <td>zxcvb</td>
                            <td>kiya67@gmai.com</td>
                            <td>admin2</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>yaya</td>
                            <td>yayaa</td>
                            <td>lkjhgf</td>
                            <td>yayanntu23@gmail.com</td>
                            <td>user</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>leanor</td>
                            <td>leanoo</td>
                            <td>poiuyt</td>
                            <td>leanorry@gmail.com</td>
                            <td>user</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection