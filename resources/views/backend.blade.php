@extends('layout')

@section('content')

    <p style="background: #c9c9c9; padding: 10px 20px;">
        Hello, {{ auth()->user()->name }} ({{ auth()->user()->email }})
        <a href="{{ url('auth/logout') }}">Logout</a>
    </p>

    <div class="lead">You can access this menu</div>

    <dl>
        <dt>User management</dt>
        <dd>
            @can('user.create')
                <a href="/users/create">Create new user</a>
            @endcan
        </dd>
        <dd>
            @can('user.edit')
                <a href="/users/1/edit">Edit a user</a>
            @endcan
        </dd>
        <dd>
            @can('user.delete')
                <a href="/users/1/delete">Delete a user</a>
            @endcan
        </dd>
    </dl>

    <dl>
        <dt>Healthcare management</dt>
        <dd>
            @can('user.healthcare.create')
                <a href="#">Create new user</a>
            @endcan
        </dd>
        <dd>
            @can('user.healthcare.edit')
                <a href="#">Edit a user</a>
            @endcan
        </dd>
    </dl>

    <dl>
        <dt>Law management</dt>
        <dd>
            @can('user.law.create')
                <a href="#">Create new user</a>
            @endcan
        </dd>
        <dd>
            @can('user.law.edit')
                <a href="#">Edit a user</a>
            @endcan
        </dd>
        <dd>
            @can('user.law.delete')
                <a href="#">Delete a user</a>
            @endcan
        </dd>
    </dl>

    <dl>
        <dt>Marketing</dt>
        <dd>
            @can('article.create')
                <a href="#">Create new article</a>
            @endcan
        </dd>
        <dd>
            @can('article.edit')
                <a href="#">Edit am article</a>
            @endcan
        </dd>
        <dd>
            @can('article.delete')
                <a href="#">Delete an article</a>
            @endcan
        </dd>
        <dd>
            @can('facebook.post')
                <a href="#">Post to Facebook</a>
            @endcan
        </dd>
        <dd>
            @can('twitter.post')
                <a href="#">Send a tweet</a>
            @endcan
        </dd>
    </dl>

@stop
