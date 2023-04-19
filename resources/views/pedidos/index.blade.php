@extends('layouts.app')

@section('content')

<h2 class="page-header">{{ ucfirst('pedidos') }}</h2>

<div class="panel panel-default">
    <div class="panel-body">
    		<a href="{{url('pedidos/create')}}" class="btn btn-success" role="button"><i class="fa fa-plus"></i> {{ ucfirst('pedido') }}</a><br><br>
        <table class="table table-striped" id="thegrid">
          <thead>
            <tr>
                <th>Id</th>
                <th>Id Tipo Pedido</th>
                <th>Valor Risco Provavel</th>
                <th>Status</th>
                <th>Data Criação</th>
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
                "ajax": "{{url('pedidos/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/pedidos') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/pedidos') }}/'+row[0]+'/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Update</a>';
                        },
                        "targets": 5                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>';
                        },
                        "targets": 5+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/pedidos') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection
