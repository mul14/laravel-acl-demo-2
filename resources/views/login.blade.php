@extends('layout')

@section('content')

    <form method="POST" class="form-inline"> {!! csrf_field() !!}
        Login as
        <select name="role" class="form-control">
            <option value="super">Super Administrator</option>
            <option value="annisa">Human Resources Departement</option>
            <option value="shabrina">Law Departement</option>
            <option value="ita">Marketing Departement</option>
            <option value="reane">Health Care Departement</option>
        </select>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@stop
