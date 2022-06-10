
@extends('theme.admin')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Post</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <form action="/post" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label($for, $text, [$options]) !!}
            <input type="text" name="title" class="form-control" id="title" placeholder="title" value="old" >
        </div>
        <div class="form-group">
            
        </div>
        <div class="form-group">
            
        </div>
        <div class="form-group">
            
        </div>
        </form>

    </div>
</main>


@endsection

