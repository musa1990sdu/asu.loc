@extends('layouts.system')

@section('title')
SmartUniversity
@endsection

@section('content')
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Title</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-primary">
                    Action
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-rounded table-striped border gy-7 gs-7">
                <thead>
                <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
@endsection
