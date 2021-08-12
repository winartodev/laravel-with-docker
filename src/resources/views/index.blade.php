@extends('layouts.app')
@section('title', 'Music')
@section('content')
<div class="mt-3">
    <h3>Get The Albums</h3>
    <div class="row mt-3">
        <div class="col-9">
            <div class="card">
                {{-- <h5 class="card-header">Albums 1</h5> --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 col-sm-4">
                            <img src="https://i.postimg.cc/AbCD1e23/coming-soon.png" alt="" style="width:150px">
                        </div>
                        <div class="col-6 col-sm-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Album Name</th>
                                        <td>Mark</td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Date Release</th>
                                        <td>Mark</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            <div class="d-grid gap-2">
                                                <a href="" type="button" class="btn btn-primary">Album Detail</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection