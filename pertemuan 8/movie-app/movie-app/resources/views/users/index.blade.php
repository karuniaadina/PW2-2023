@extends('layouts.main')

@section('content')
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
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Hana</td>
                                            <td>hanaf</td>
                                            <td>123</td>
                                            <td>hana@gmail.com</td>
                                            <td>user</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>fauziah</td>
                                            <td>fau</td>
                                            <td>138</td>
                                            <td>fau13@gmail.com</td>
                                            <td>user</td>

                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>example</td>
                                            <td>example</td>
                                            <td>example</td>
                                            <td>example</td>
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
@endsection