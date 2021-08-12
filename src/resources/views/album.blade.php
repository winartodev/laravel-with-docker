@extends('layouts.app')
@section('title', 'Music')
@section('content')
<div class="mt-3">
    <h3>Album</h3>

    <div class="row mt-3">
        <div class="col">
            <table class="table" id="dataTables">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Album ID</th>
                        <th scope="col">Album Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection