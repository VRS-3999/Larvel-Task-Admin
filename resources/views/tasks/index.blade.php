@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
        <!--
            @if ($errors->any())
                @foreach( $errors-> all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach
            @endif
        -->

            <div class="card">
                <div class="card-header">
                    Add Task
                </div>
                <div class="card-body">
                <form action="{{ route('title.create') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Task</label>
                        <input type="text" name="title" id="title" placeholder="Task" class="form-control {{ $errors->has('title')?'is-invalid':'' }}" >
                        <div class="invalid-feedback">
                            {{ $errors->has('title')? $errors->first('title'): ''}}
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" class="btn btn-primary">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Task View
                </div>
                <div class="card-body">
                    <table class= "table table-bordered">
                        <tr>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Task</td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection