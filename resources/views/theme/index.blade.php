
@extends('theme.admin')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tablas</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th># ID </th>
                            <th>Titulo</th>
                            <th>Contenido</th>
                            <th>Imagen</th>
                            <th>User</th>
                            <th>Tool</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th># ID </th>
                            <th>Titulo</th>
                            <th>Contenido</th>
                            <th>Imagen</th>
                            <th>User</th>
                            <th>Tool</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($posts as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->tittle}}</td>
                            <td>{{$item->content}}</td>
                            <td><img src="{{$item->image_url}}" alt="{{$item->image_url}}" width="50"  ></td>
                            <td>{{$item->test['name']}}</td>
                            {{-- <td>{{$item->created_at}}</td> --}}
                            <td> 
                                <button>Editar</button>
                                <hr>
                                <button>Eliminar</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection



           
       