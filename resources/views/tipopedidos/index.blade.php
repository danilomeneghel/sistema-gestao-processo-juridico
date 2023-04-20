@extends('layouts.app')

@section('content')

<h2 class="page-header">{{ ucfirst('Tipo Pedidos') }}</h2>

<div class="panel panel-default">
    <div class="panel-body">
    		<a href="{{url('tipopedidos/create')}}" class="btn btn-success" role="button"><i class="fa fa-plus"></i> {{ ucfirst('Tipo Pedido') }}</a><br><br>
        <table class="table table-striped" id="thegrid">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Ativo</th>
              <th style="width:50px"></th>
              <th style="width:50px"></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')
    <script type="text/javascript">
        var theGrid = null;
        $(document).ready(function(){
            theGrid = $('#thegrid').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "responsive": true,
                "ajax": "{{url('tipopedidos/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/tipopedidos') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/tipopedidos') }}/'+row[0]+'/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Alterar</a>';
                        },
                        "targets": 3                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a>';
                        },
                        "targets": 3+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('Você realmente deseja excluir este registro?')) {
               $.ajax({ url: '{{ url('/tipopedidos') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection
