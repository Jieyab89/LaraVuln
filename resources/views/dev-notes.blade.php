@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Notes for update') }}</div>
                <div class="table-responsive">
                    <table class="table">
                        <caption>Will update and progress</caption>
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Task Name</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Added docker compose & container</td>
                                <td>Settings script for docker</td>
                                <td>To do</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Added auto reset data like database, sciprt and payload was excuted</td>
                                <td>Make script for reset data after pentest or hacked this web apps</td>
                                <td>To do</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Add JWT confusion vulnerability</td>
                                <td>Added new exploit or vulnerability category</td>
                                <td>To do</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Change web design</td>
                                <td>Make beautiful web page UI</td>
                                <td>To do</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Added race conition vulnerability</td>
                                <td>Race condition vulnerability to bussines logic</td>
                                <td>To do</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
