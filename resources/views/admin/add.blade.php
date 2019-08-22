@extends('layouts.admin')
@section('content')
<form action="add-user" method="post">

            <input type="text" name="first_name" placeholder="first_name">
            <input type="text" name="last_name" placeholder="last_name">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="password" placeholder="password">

					<button type="submit" value="submit">set</button>
                    {{csrf_field()}}
                </form>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
@stop
