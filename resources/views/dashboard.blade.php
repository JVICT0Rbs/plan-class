@extends('layout')
@section('Title', 'DashBoard')

@section('content')
    <div class="col-8 m_auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">AUTOR</th>
                <th scope="col">TÍTULO</th>
                <th scope="col">SUBTITULO</th>
                <th scope="col">EDIÇÃO</th>
                <th scope="col">EDITORA</th>
                <th scope="col">PUBLIÇÃO</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection
