@extends('layouts.main')

@section('content')
<h1 class="mt-4">Reviews Data</h1>
                        <div class="d-flex justify-content-between mb-4">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Reviews</li>
                            </ol>
                            <a href="#">
                                <button class="btn btn-success" type="submit">Create Data</button>
                            </a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Reviews Data
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Film</th>
                                            <th>User</th>
                                            <th>Rating</th>
                                            <th>Review</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Film</th>
                                            <th>User</th>
                                            <th>Rating</th>
                                            <th>Review</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Slapsticks</td>
                                            <td>Home Alone</td>
                                            <td>8.5</td>
                                            <td>Lumayan seru</td>
                                            <td>1999</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Put Ur And My Shoulder</td>
                                            <td>Liao Yu</td>
                                            <td>9.5</td>
                                            <td>Seru bangettt</td>
                                            <td>2019</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Insidious</td>
                                            <td>Leigh Whannell</td>
                                            <td>9.1</td>
                                            <td>Mengerikan</td>
                                            <td>2010</td>
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